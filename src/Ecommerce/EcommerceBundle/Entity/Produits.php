<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints As Assert; // namespace des validator Assert

/**
 * Produits
 *
 * @ORM\Table("produits")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\ProduitsRepository")
 */
class Produits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;
    
    /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\tva", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $tva;
    
    /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\categories", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $categories;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     * @Assert\NotBlank(message="ce champ est obligatoire")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponible", type="boolean")
     */
    private $disponible;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Produits
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Produits
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Produits
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set disponible
     *
     * @param boolean $disponible
     * @return Produits
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return boolean 
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set image
     *
     * @param \Ecommerce\EcommerceBundle\Entity\media $image
     *
     * @return Produits
     */
    public function setImage(\Ecommerce\EcommerceBundle\Entity\media $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Ecommerce\EcommerceBundle\Entity\media
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set tva
     *
     * @param \Ecommerce\EcommerceBundle\Entity\tva $tva
     *
     * @return Produits
     */
    public function setTva(\Ecommerce\EcommerceBundle\Entity\tva $tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return \Ecommerce\EcommerceBundle\Entity\tva
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set categories
     *
     * @param \Ecommerce\EcommerceBundle\Entity\categories $categories
     *
     * @return Produits
     */
    public function setCategories(\Ecommerce\EcommerceBundle\Entity\categories $categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return \Ecommerce\EcommerceBundle\Entity\categories
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
