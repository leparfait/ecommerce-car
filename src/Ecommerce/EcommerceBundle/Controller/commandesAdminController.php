<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Ecommerce\EcommerceBundle\Entity\commandes;
use Ecommerce\EcommerceBundle\Entity\utilisateursAdresses;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Form\utilisateursAdressesType;

class commandesAdminController extends Controller
{ 
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $commandes  = $em->getRepository("EcommerceBundle:commandes")->findAll();
        
        return $this->render('EcommerceBundle:Administration:commandes/layout/index.html.twig', array('commandes'=>$commandes));
    }
    
    public function showFactureAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('EcommerceBundle:commandes')->find($id); 
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
