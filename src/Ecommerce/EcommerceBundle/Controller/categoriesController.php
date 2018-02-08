<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class categoriesController extends Controller
{
    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('EcommerceBundle:categories')->findAll();
        
        return $this->render('EcommerceBundle:Default:categories/moduleUsed/menu.html.twig', array('categories'=>$categories));
    }
    
}
