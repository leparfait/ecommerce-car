<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Ecommerce\EcommerceBundle\Entity\utilisateursAdresses;
use Ecommerce\EcommerceBundle\Form\utilisateursAdressesType;

class panierController extends Controller
{ 
    public function menuAction()
    {
     $session = $this->getRequest()->getSession();
     if(!$session->has('panier'))     
         $articles = 0;
     else 
         $articles = count ($session->get('panier'));
      return $this->render('EcommerceBundle:Default:panier/moduleUsed/menu.html.twig', array('articles'=>$articles));
    }

    public function ajouterAction($id)
    {
      $session = $this->getRequest()->getSession();
        
        if(!$session->has('panier')) $session->set('panier', array());        
           $panier = $session->get('panier');
        
        if(array_key_exists($id, $panier)){
            if($this->getRequest()->query->get('qte') != null) $panier[$id] = $this->getRequest()->query->get('qte');
        }else{           
            if($this->getRequest()->query->get('qte') != null) $panier[$id] = $this->getRequest()->query->get('qte');
            else 
                $panier[$id] = 1;
        }
        
        $session->set('panier', $panier);
        
        return $this->redirect($this->generateUrl('panier'));
    }
    
#####################################################################################################
    
    public function supprimerAction($id)
    {
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier');
                
        if(array_key_exists($id, $panier)){
            unset($panier[$id]);
            $session->set('panier', $panier);
            $this->get('session')->getFlashbag()->add('success','produit supprimé du panier avec succès');
        }
        
        return $this->redirect($this->generateUrl('panier'));
    }
   
#####################################################################################################
    
    public function panierAction()
    { 
        $session = $this->getRequest()->getSession();
//        $session->remove('panier');
//        die();
        
          if(!$session->has('panier')) $session->set('panier', array());
       
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->findArray(array_keys($session->get('panier')));
        
        return $this->render('EcommerceBundle:Default:panier/layout/panier.html.twig', array('produits'=>$produits,
                                                                                             'panier'=>$session->get('panier')));
    }

#####################################################################################################
    
    public function livraisonAction()
    {
        $request = $this->getRequest();
        $request->setLocale('en_EN');
        
        $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $entity = new utilisateursAdresses();
        $form = $this->createForm(new utilisateursAdressesType(), $entity);
        
        if($this->get('request')->getMethod() == 'POST'){
            $form->handleRequest($this->getRequest());// recupere les informations du formulaire
            if($form->isValid()){
              $em = $this->getDoctrine()->getManager();
              $entity->setUtilisateur($utilisateur);
              $em->persist($entity);
              $em->flush();
              
              return $this->redirect($this->generateUrl('livraison')); 
            }
        }
        return $this->render('EcommerceBundle:Default:panier/layout/livraison.html.twig', array('utilisateur'=>$utilisateur,
                                                                                                'form'=>$form->createView()));
    }
    
#####################################################################################################
    
  public function adresseSuppressionAction($id)
  {
       $em = $this->getDoctrine()->getManager();
       $entity = $em->getRepository('EcommerceBundle:utilisateursAdresses')->find($id);
       
       if($this->container->get('security.context')->getToken()->getUser() != $entity->getUtilisateur() || !$entity ){
           return $this->redirect($this->generateUrl('livraison'));
       }
       
       $em->remove($entity);
       $em->flush();
       return $this->redirect($this->generateUrl('livraison'));
  }
  
#####################################################################################################
  
    public function setLivraisonOnSession()
    {   
        $session = $this->getRequest()->getSession();
        if(!$session->has('adresse')){
            $session->set('adresse', array());
        }
        $adresse = $session->get('adresse');
        if($this->getRequest()->request->get('livraison') != null && $this->getRequest()->request->get('facturation') != null ){
          $adresse['livraison'] = $this->getRequest()->request->get('livraison');
          $adresse['facturation'] = $this->getRequest()->request->get('facturation');
        }else {
          return $this->redirect($this->generateUrl('validation'));
        }
        $session->set('adresse',$adresse);
        return $this->redirect($this->generateUrl('validation'));
    }
#################################################################rateUrl('validation'));####################################
    
    public function validationAction()
    {   

        if($this->get('request')->getMethod() == 'POST' ){
            $this->setLivraisonOnSession();
        }
        $session = $this->getRequest()->getSession();
        $adresse = $session->get('adresse');
        $em = $this->getDoctrine()->getManager();
//        var_dump($adresse);
//        die();
        $prepareCommande = $this->forward('EcommerceBundle:commandes:prepareCommande');
//        var_dump($prepareCommande->getContent());
//        die();
        $commande = $em->getRepository('EcommerceBundle:commandes')->find($prepareCommande->getContent());
        $session = $this->getRequest()->getSession();     
        $adresse = $session->get('adresse');
/*
        $produits = $em->getRepository('EcommerceBundle:Produits')->findArray(array_keys($session->get('panier')));
        $livraison = $em->getRepository('EcommerceBundle:utilisateursAdresses')->find($adresse['livraison']);
        $facturation = $em->getRepository('EcommerceBundle:utilisateursAdresses')->find($adresse['facturation']);
*/  
        return $this->render('EcommerceBundle:Default:panier/layout/validation.html.twig', array('commande'=>$commande));
    }
}
