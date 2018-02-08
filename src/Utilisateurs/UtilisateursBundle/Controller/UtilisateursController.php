<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class UtilisateursController extends Controller
{
    
    public function villesAction($cp)
    {
      $em = $this->getDoctrine()->getManager();
      $villeCodePostal = $em->getRepository('UtilisateursBundle:Villes')->findOneBy(array('villeCodePostal'=>$cp));
      
      if ($villeCodePostal){
          $ville = $villeCodePostal->getVilleNom();
      } else {
          $ville = null ;
      }
          $response = new JsonResponse;
          return $response->setData(array('ville'=>$ville));
    }

    public function facturesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $factures = $em->getRepository('EcommerceBundle:commandes')->byFacture($this->getUser());
        
        return $this->render('UtilisateursBundle:Default:layout/facture.html.twig', array('factures' => $factures));
    }
    
    public function facturesPDFAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('EcommerceBundle:commandes')->findOneBy(array('utilisateur'=>$this->getUser(),
                                                                                     'valider'=>1,
                                                                                     'id'=> $id )); 
        if(!$facture){
            $this->get('session')->getFlashBag()->add('error','erreur d\'impression ');
            return $this->redirect($this->generateUrl('factures'));
        }
        
        $this->container->get('setNewFacture')->facture($facture)->Output('Facture.pdf');
        
        $response = new Response();
        $response->headers->set('content-type','application/pdf');
        
        return $response;
    }
    
}
