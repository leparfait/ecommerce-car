<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Produits;

class produitsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $produits1 = new Produits();
        $produits1->setCategories($this->getReference('categories1'));
        $produits1->setDescription("Le poivre rouge catégories définies dans le fichier de fixture");
        $produits1->setNom('poivre rouge');
        $produits1->setDisponible('1');
        $produits1->setImage($this->getReference('media6'));
        $produits1->setPrix('1.99');
        $produits1->setTva($this->getReference('tva2'));
        $manager->persist($produits1);
        
        $produits2 = new Produits();
        $produits2->setCategories($this->getReference('categories1'));
        $produits2->setDescription("Le piment catégories définies dans le fichier de fixture");
        $produits2->setNom('piment');
        $produits2->setDisponible('1');
        $produits2->setImage($this->getReference('media4'));
        $produits2->setPrix('3.99');
        $produits2->setTva($this->getReference('tva2'));
        $manager->persist($produits2);
        
        $produits3 = new Produits();
        $produits3->setCategories($this->getReference('categories2'));
        $produits3->setDescription("La tomate catégories définies dans le fichier de fixture");
        $produits3->setNom('Tomate');
        $produits3->setDisponible('1');
        $produits3->setImage($this->getReference('media5'));
        $produits3->setPrix('0.99');
        $produits3->setTva($this->getReference('tva2'));
        $manager->persist($produits3);
        
        $produits4 = new Produits();
        $produits4->setCategories($this->getReference('categories1'));
        $produits4->setDescription("Le poivre rouge catégories définies dans le fichier de fixture");
        $produits4->setNom('poivre rouge');
        $produits4->setDisponible('1');
        $produits4->setImage($this->getReference('media3'));
        $produits4->setPrix('5.99');
        $produits4->setTva($this->getReference('tva2'));
        $manager->persist($produits4);
        
        $produits5 = new Produits();
        $produits5->setCategories($this->getReference('categories2'));
        $produits5->setDescription("Le raisin catégories définies dans le fichier de fixture");
        $produits5->setNom('raisin');
        $produits5->setDisponible('1');
        $produits5->setImage($this->getReference('media7'));
        $produits5->setPrix('9.99');
        $produits5->setTva($this->getReference('tva1'));
        $manager->persist($produits5);
        
        $produits6 = new Produits();
        $produits6->setCategories($this->getReference('categories2'));
        $produits6->setDescription("L'orange catégories définies dans le fichier de fixture");
        $produits6->setNom('orange');
        $produits6->setDisponible('1');
        $produits6->setImage($this->getReference('media8'));
        $produits6->setPrix('2.99');
        $produits6->setTva($this->getReference('tva1'));
        $manager->persist($produits6);
        
//        $produits7 = new Produits();
//        $produits7->setCategories($this->getReference('categories1'));
//        $produits7->setDescription("La tomate catégories définies dans le fichier de fixture");
//        $produits7->setNom('Tomate');
//        $produits7->setDisponible('1');
//        $produits7->setImage($this->getReference('media5'));
//        $produits7->setPrix('0.99');
//        $produits7->setTva($this->getReference(tva2));
//        $manager->persist($produits7);
//        
//        $produits4 = new Produits();
//        $produits4->setCategories($this->getReference('categories1'));
//        $produits4->setDescription("Le poivre rouge catégories définies dans le fichier de fixture");
//        $produits4->setNom('poivre rouge');
//        $produits4->setDisponible('1');
//        $produits4->setImage($this->getReference('media3'));
//        $produits4->setPrix('5.99');
//        $produits4->setTva($this->getReference(tva2));
//        $manager->persist($produits4);
        $manager->flush();
        
        $this->addReference('produits1', $produits1);
        $this->addReference('produits2', $produits2);
        $this->addReference('produits3', $produits3);
        $this->addReference('produits4', $produits4);
        $this->addReference('produits5', $produits5);
        $this->addReference('produits6', $produits6);
//        $this->addReference('media7', $media7);
//        $this->addReference('media8', $media8);
    }
    public function getOrder(){
        return 4;
    }
   
}
