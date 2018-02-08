<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Ecommerce\EcommerceBundle\Entity\commandes;
use Ecommerce\EcommerceBundle\Entity\utilisateursAdresses;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Form\utilisateursAdressesType;
use Ecommmerce\EcommerceBundle\Service\getReference;

class commandesController extends Controller
{ 
    public function facture()
    {   
       $em = $this->getDoctrine()->getManager();
       $generator = $this->container->get('security.secure_random');
       $session = $this->getRequest()->getSession();
       $adresse = $session->get('adresse');
       $panier = $session->get('panier');
       $commande = array();
       $totalHT = 0;
       $totalTVA = 0;
       
       $produits = $em->getRepository('EcommerceBundle:Produits')->findArray(array_keys($session->get('panier')));
       $livraison = $em->getRepository('EcommerceBundle:utilisateursAdresses')->find($adresse['livraison']);
       $facturation = $em->getRepository('EcommerceBundle:utilisateursAdresses')->find($adresse['facturation']);

       foreach($produits as $produit){
           $prixHT = $produit->getPrix() * $panier[$produit->getId()];
           $prixTTC = ( $produit->getPrix() * $panier[$produit->getId()] ) / $produit->getTva()->getMultiplicate();
           $totalHT += $prixHT ;
           $totalTVA += $prixTTC;
           
           if (!isset($commande['tva']['%'.$produit->getTva()->getValeur()])){
               
               $commande['tva']['%'.$produit->getTva()->getValeur()] = round($prixTTC - $prixHT,2);
           }else{
               $commande['tva']['%'.$produit->getTva()->getValeur()] += round($prixTTC - $prixHT,2);
           }
           
           $totalTVA += round($prixTTC - $prixHT,2); 
           $commande['produit'][$produit->getId()] = array('reference'=>$produit->getNom(),
                                                           'quantite'=>$panier[$produit->getId()],
                                                           'prixHT'=> round($produit->getPrix(),2),
                                                           'prixTTC'=>round(($produit->getPrix() / $produit->getTva()->getMultiplicate()),2));
           }
           
           $commande['livraison'] = array('nom'=>$livraison->getNom(),
                                          'prenom'=>$livraison->getPrenom(),
                                          'telephone'=>$livraison->getTelephone(),
                                          'adresse'=>$livraison->getAdresse(),
                                          'cp'=>$livraison->getCp(),
                                          'ville'=>$livraison->getVille(),
                                          'pays'=>$livraison->getPays(),
                                          'complement'=>$livraison->getComplement());
           
           $commande['facturation'] = array('nom'=>$facturation->getNom(),
                                          'prenom'=>$facturation->getPrenom(),
                                          'telephone'=>$facturation->getTelephone(),
                                          'adresse'=>$facturation->getAdresse(),
                                          'cp'=>$facturation->getCp(),
                                          'ville'=>$facturation->getVille(),
                                          'pays'=>$facturation->getPays(),
                                          'complement'=>$facturation->getComplement());
            $commande['prixHT'] = round($totalHT, 2);
            $commande['prixTTC'] = round($totalHT + $totalTVA,2);
            $commande['token'] = bin2hex($generator->nextBytes(20));
            
            return $commande;
            
    }

############################################################################################################
    
    public function prepareCommandeAction()
    {
      $session = $this->getRequest()->getSession();
      $em = $this->getDoctrine()->getManager();
      if(!$session->has('commande')){
          $commande = new commandes();
      }else{
        $commande = $em->getRepository('EcommerceBundle:commandes')->find($session->get('commande'));
      }
      $commande->setDate(new \DateTime());
      $commande->setUtilisateur($this->container->get('security.context')->getToken()->getUser());
      $commande->setValider(0);
      $commande->setReference(0);
      $commande->setCommande($this->facture());
       
      if(!$session->has('commande')){
          $em->persist($commande);
          $session->set('commande',$commande);
          
      }
      $em->flush();
      return new Response($commande->getId());
    }
    
 ############################################################################################################
  
    //Fonction qui remplace l'api de la banque
    
    public function validationCommandeAction($id)
    {
     $em = $this->getDoctrine()->getManager();
     $commande = $em->getRepository('EcommerceBundle:commandes')->find($id);
     
     if(!$commande || $commande->getValider() == 1){
         throw $this->createNotFoundException('Cette commande a deja été validé');
     }
     $commande->setValider(1);
     $commande->setReference(1); //($this->container->get('setNewReference')->reference());//service
     $em->flush();
     
     $session = $this->getRequest()->getSession();
     $session->remove('adresse');
     $session->remove('panier');
     $session->remove('commande');
     
     //le mail de validation
     
     $message = \Swift_Message::newInstance()
                 ->setSubject('Validation de la commande')
                 ->setFrom(array('parfaitonana4@gmail.com'=>'Aurey shop'))
                 ->setTo($commande->getUtilisateur()->getEmailCanonical())
                 ->setCharset('utf-8')
                 ->setContentType('text/html')
                 ->setBody($this->renderView('EcommerceBundle:Default:SwiftLayout/validationCommande.html.twig',array('utilisateur'=>$commande->getUtilisateur())));
         $this->get('mailer')->send($message);
             
     $this->get('session')->getFlashBag()->add('sucess','Votre commande a été validé'); 
     return $this->redirect($this->generateUrl('factures'));
    }
}
