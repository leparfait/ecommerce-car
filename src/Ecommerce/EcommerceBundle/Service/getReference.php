<?php
namespace Ecommmerce\EcommerceBundle\Service;

use Symfony\Component\Security\Core\SecurityContextInterface;


 Class getReference
{
    public function  __construct($securityContext,  $entityManager )
    {
        $this->em = $entityManager;
        $this->securityContext = $securityContext;
    }

    public function reference()
    {
      $reference = $this->em->getRepository('EcommerceBundle:commandes')->findOneBy(array('valider'=>1), array('id'=>'DESC'),1,1 );
     
     if(!$reference)
         return 1;         
      else
         return $reference->getReference() + 1;       
    }
}