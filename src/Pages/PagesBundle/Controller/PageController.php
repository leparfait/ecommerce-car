<?php

namespace Pages\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function menuAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('PagesBundle:pages')->findAll();
        
        return $this->render('PagesBundle:Default:pages/modulesUsed/menu.html.twig', array('pages'=>$pages));
    }

    public function pageAction($id)
    {
         $em = $this->getDoctrine()->getManager();
         $page = $em->getRepository('PagesBundle:pages')->find($id);
        
         if(!$page) throw $this->createNotFoundException('Page introuvable');
        
         return $this->render('PagesBundle:Default:pages/layout/pages.html.twig', array('page'=>$page));
    }
}
 