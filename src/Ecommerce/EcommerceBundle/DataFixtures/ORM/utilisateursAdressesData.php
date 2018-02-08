<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\utilisateursAdresses;

class utilisateursAdressesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        
        $utilisateurAdresses1 = new utilisateursAdresses();
        $utilisateurAdresses1->setUtilisateur($this->getReference('utilisateur1'));
        $utilisateurAdresses1->setNom('ONANA');
        $utilisateurAdresses1->setPrenom('parfait');
        $utilisateurAdresses1->setTelephone('69058462');
        $utilisateurAdresses1->setPays('Cameroun');
        $utilisateurAdresses1->setVille('Douala');
        $utilisateurAdresses1->setAdresse('Rue richard bell');
        $utilisateurAdresses1->setComplement('PDG de la structure');
        $utilisateurAdresses1->setCp('10012');
        $manager->persist($utilisateurAdresses1);
        
        $utilisateurAdresses2 = new utilisateursAdresses();
        $utilisateurAdresses2->setUtilisateur($this->getReference('utilisateur2'));
        $utilisateurAdresses2->setNom('NGASSEU NGAYAP');
        $utilisateurAdresses2->setPrenom('aurore');
        $utilisateurAdresses2->setTelephone('699792337');
        $utilisateurAdresses2->setPays('Cameroun');
        $utilisateurAdresses2->setVille('Douala');
        $utilisateurAdresses2->setAdresse('Bonanjo face olympia');
        $utilisateurAdresses2->setComplement('Princess du PDG de la structure');
        $utilisateurAdresses2->setCp('10012');
        $manager->persist($utilisateurAdresses2);
        
        $manager->flush();
        
//        $this->addReference('utilisateurAdresses1', $utilisateurAdresses1);
//        $this->addReference('utilisateurAdresses2', $utilisateurAdresses2);
    }
    public function getOrder(){
        return 6;
    }
   
}
