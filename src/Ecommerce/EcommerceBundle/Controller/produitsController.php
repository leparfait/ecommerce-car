<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Form\RechercheType;

class produitsController extends Controller
{
    public function produitsAction()
    {
      $session = $this->getRequest()->getSession();
      $em = $this->getDoctrine()->getManager();
      $produits = $em->getRepository('EcommerceBundle:Produits')->findBy(array ('disponible'=> 1));
        
      if($session->has('panier')) $panier = $session->get('panier');
      else
           $panier = false;
      
      return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits'=>$produits,
                                                                                                 'panier'=>$panier));
    }
    
###########################################################################################################
    
    public function presentationAction($id)
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EcommerceBundle:Produits')->find($id);
        
        if(!$produit){
            throw $this->createNotFoundException('Page introuvable');
        }
        
        if($session->has('panier')) $panier = $session->get('panier');
        else
           $panier = false;
        
        return $this->render('EcommerceBundle:Default:produits/layout/presentation.html.twig', array('produit'=>$produit,
                                                                                                     'panier'=>$panier));
    }
    
########################################################################################################### 
    
    public function categorieAction($categorie)
    {
      $session = $this->getRequest()->getSession();
      $em = $this->getDoctrine()->getManager();
      $produits = $em->getRepository('EcommerceBundle:Produits')->byCategorie($categorie);
      
      $categories = $em->getRepository('EcommerceBundle:categories')->find($categorie);       
      if(!$categories){
            throw $this->createNotFoundException('Page introuvable');
        }elseif ($session->has('panier')) {
            $panier = $session->get('panier');
        }else
           $panier = false;
        
      return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits'=>$produits,
                                                                                               'panier'=>$panier));
    }
    
########################################################################################################### 
    
    public function rechercheAction()
    {
        $form = $this->createForm(new RechercheType());
        return $this->render('EcommerceBundle:Default:recherche/moduleUsed/recherche.html.twig', array('form'=>$form->createView()));    
    }
    
###########################################################################################################
    
    public function rechercheTraitementAction()
    {
        $form = $this->createForm(new RechercheType());
        if ($this->get('request')->getMethod() == 'POST'){
            
            $form->bind($this->get('request'));
            $em = $this->getDoctrine()->getManager();
            $produits = $em->getRepository('EcommerceBundle:Produits')->recherche($form['recherche']->getData());
        }else{
            throw $this->createNotFoundException('Page introuvable');
        }
        
        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits'=>$produits));    
    }
}
