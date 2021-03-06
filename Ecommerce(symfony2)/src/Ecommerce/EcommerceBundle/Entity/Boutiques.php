<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boutiques
 *
 * @ORM\Table("Boutiques")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\BoutiquesRepository")
 */
class Boutiques
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
     * @ORM\OneToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    public $image;

     /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Categories", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;

     /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs", inversedBy="boutiques")
     * @ORM\JoinColumn(nullable=true)
     */
    
    private $utilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=125)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="fb", type="text")
     */
    private $fb;

    /**
     * @var string
     *
     * @ORM\Column(name="twi", type="text")
     */
    private $twi;

    /**
     * @var string
     *
     * @ORM\Column(name="goog", type="text")
     */
    private $goog;

    /**
     * @var string
     *
     * @ORM\Column(name="yout", type="text")
     */
    private $yout;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseEmail", type="string", length=255)
     */
    private $adresseEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
    * @var datetime 
    *
    * @ORM\Column(name="date_creation", type="datetime")
    */
    private $date_creation;

     /**
     * @var string
     *
     * @ORM\Column(name="lng", type="string", length=255)
     */
    private $lng;

     /**
     * @var string
     *
     * @ORM\Column(name="atitud", type="string", length=255)
     */
    private $atitud;


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
     * @return Boutiques
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
     * @return Boutiques
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
     * Set image
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Media $image
     * @return Boutiques
     */
    public function setImage(\Ecommerce\EcommerceBundle\Entity\Media $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Media 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set categorie
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Categories $categorie
     * @return Boutiques
     */
    public function setCategorie(\Ecommerce\EcommerceBundle\Entity\Categories $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Categories 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
    
     public function __toString()
    {
        return $this->getNom();
    }

    /**
     * Set utilisateur
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateur
     * @return Boutiques
     */
    public function setUtilisateur(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     * @return Boutiques
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Boutiques
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set date_creation
     *
     * @param \DateTime $dateCreation
     * @return Boutiques
     */
    public function setDateCreation($dateCreation)
    {
        $this->date_creation = $dateCreation;

        return $this;
    }

    /**
     * Get date_creation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * Set image_1
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Media $image1
     * @return Boutiques
     */
    public function setImage1(\Ecommerce\EcommerceBundle\Entity\Media $image1)
    {
        $this->image_1 = $image1;

        return $this;
    }

    /**
     * Get image_1
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Media 
     */
    public function getImage1()
    {
        return $this->image_1;
    }

    /**
     * Set image_2
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Media $image2
     * @return Boutiques
     */
    public function setImage2(\Ecommerce\EcommerceBundle\Entity\Media $image2)
    {
        $this->image_2 = $image2;

        return $this;
    }

    /**
     * Get image_2
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Media 
     */
    public function getImage2()
    {
        return $this->image_2;
    }

    /**
     * Set image_3
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Media $image3
     * @return Boutiques
     */
    public function setImage3(\Ecommerce\EcommerceBundle\Entity\Media $image3)
    {
        $this->image_3 = $image3;

        return $this;
    }

    /**
     * Get image_3
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Media 
     */
    public function getImage3()
    {
        return $this->image_3;
    }

    /**
     * Set lng
     *
     * @param string $lng
     * @return Boutiques
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return string 
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set atitud
     *
     * @param string $atitud
     * @return Boutiques
     */
    public function setAtitud($atitud)
    {
        $this->atitud = $atitud;

        return $this;
    }

    /**
     * Get atitud
     *
     * @return string 
     */
    public function getAtitud()
    {
        return $this->atitud;
    }

    /**
     * Set fb
     *
     * @param string $fb
     * @return Boutiques
     */
    public function setFb($fb)
    {
        $this->fb = $fb;

        return $this;
    }

    /**
     * Get fb
     *
     * @return string 
     */
    public function getFb()
    {
        return $this->fb;
    }

    /**
     * Set twi
     *
     * @param string $twi
     * @return Boutiques
     */
    public function setTwi($twi)
    {
        $this->twi = $twi;

        return $this;
    }

    /**
     * Get twi
     *
     * @return string 
     */
    public function getTwi()
    {
        return $this->twi;
    }

    /**
     * Set goog
     *
     * @param string $goog
     * @return Boutiques
     */
    public function setGoog($goog)
    {
        $this->goog = $goog;

        return $this;
    }

    /**
     * Get goog
     *
     * @return string 
     */
    public function getGoog()
    {
        return $this->goog;
    }

    /**
     * Set yout
     *
     * @param string $yout
     * @return Boutiques
     */
    public function setYout($yout)
    {
        $this->yout = $yout;

        return $this;
    }

    /**
     * Get yout
     *
     * @return string 
     */
    public function getYout()
    {
        return $this->yout;
    }

    /**
     * Set adresseEmail
     *
     * @param string $adresseEmail
     * @return Boutiques
     */
    public function setAdresseEmail($adresseEmail)
    {
        $this->adresseEmail = $adresseEmail;

        return $this;
    }

    /**
     * Get adresseEmail
     *
     * @return string 
     */
    public function getAdresseEmail()
    {
        return $this->adresseEmail;
    }
}
