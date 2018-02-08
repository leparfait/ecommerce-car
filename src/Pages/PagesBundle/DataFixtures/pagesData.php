<?php

namespace Pages\PagesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pages\PagesBundle\Entity\pages;

class pagesData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $pages1 = new pages();
        $pages1->setTitre('CGV');
        $pages1->setContenu('<div class="row">
                    <div class="span5">
                        <img src="../img/holder.png" alt="DevAndClick" width="470" height="310">
                    </div>

                    <div class="span4">
                        <h4>Item Brand and Category</h4>
                        <h5>AB29837 Item Model</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                        <h4>3.33€</h4>
                        <form action="panier.php">
                            <select name="qte" class="span1">
                                <option>1</option>
                            </select>

                            <div>
                                <button class="btn btn-primary">Ajouter au panier</button>
                            </div>
                        </form>

                    </div>
                </div> ');

        $manager->persist($pages1);
        
         $pages2 = new pages();
         $pages2 ->setTitre('Mentions légales');
         $pages2 ->setContenu('            
                    <div class="row">
                    <div class="span5">
                        <img src="../img/holder.png" alt="DevAndClick" width="470" height="310">
                    </div>

                    <div class="span4">
                        <h4>Item Brand and Category</h4>
                        <h5>AB29837 Item Model</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                        <h4>3.33€</h4>
                        <form action="panier.php">


                            <select name="qte" class="span1">
                                <option>1</option>
                            </select>

                            <div>
                                <button class="btn btn-primary">Ajouter au panier</button>
                            </div>
                        </form>

                    </div>
                </div> ');

        $manager->persist($pages2);
        
        $manager->flush();
 
        }
        
}
