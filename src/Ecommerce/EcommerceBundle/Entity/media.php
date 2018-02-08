<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert; //pour les assert

/**
 * media
 *
 * @ORM\Table("media")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\mediaRepository")
 * @ORM\HasLifecycleCallbacks
 */
class media
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
     * @var \DateTime
     * 
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;
    
    /*
     * @ORM\PostLoad()
     */
    public function postLoad()
    {
        $this->updatedAt = new \DateTime();
    }

        /**
     * @ORM\Column(type="string", length=255)
     * Assert\NotBlank
     */
    public $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;
    
    public $file;
    
    public function getUploadRootDir()
    {
        return __dir__.'/../../../../web/uploads';
    }
    
    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    /**
     * @ORM\Prepersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        $this->tempFile = $this->getAbsolutePath();
        $this->oldFile = $this->getPath();
        $this->updatedAt = new \DateTime();
        
        if(null !== $this->file)
            $this->path = sha1(uniqid(mt_rand(), true)).'.'.$this->file->guessExtension();
    }

     /**
     * @ORM\Postpersist()
     * @ORM\PostUpdate()
     */
    public function Upload()
    {
        if(null !== $this->file){
            $this->file->move($this->getUploadRootDir(), $this->path) ; //depacement du fichier
        unset($this->file); //suppresion du fichier temporaire
     
      if($this->oldFile != null ) unlink ($this->tempFile);
    }
    
    }
    
     /**
     * @ORM\PreRemove()
     */
    public function preRemoveUpload()
    {
        $this->tempFile = $this->getAbsolutePath();
    }
    
     /**
     * @ORM\PostRemove()
     */
    
    // supresssion du fichier
    public function RemoveUpload()
    {
     if(file_exists($this->tempFile)) unlink ($this->tempFile);
    }
    
    //repertoire de l'image
    public function getAssetPath()
    {
        return 'uploads/'.$this->path;
    }

    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function  getPath()
    {
        return $this->path ;
    }
    
    public function getName()
    {
        return $this->name;
    }

}
