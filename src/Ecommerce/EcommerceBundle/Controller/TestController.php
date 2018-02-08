<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    public function ajoutAction()
    {
        die('ca pointe ici');
        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig');
    }
    

}
