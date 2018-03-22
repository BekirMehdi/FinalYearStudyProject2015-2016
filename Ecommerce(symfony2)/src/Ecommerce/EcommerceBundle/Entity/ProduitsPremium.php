<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProduitsPremium
 *
 * @ORM\Table("ProduitsPremium")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\ProduitsPremiumRepository")
 */
class ProduitsPremium
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
     * @ORM\OneToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    public $image_1;

    /**
     * @ORM\OneToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    public $image_2;

    /**
     * @ORM\OneToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    public $image_3;

    /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Categories", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    public $Categorie_Boutique;

    /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\SousCategories", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie_Produit;

      /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Boutiques", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $boutique;

      /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs", inversedBy="produitsPremium")
     * @ORM\JoinColumn(nullable=true)
     */
    
    private $utilisateur;
    
    /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Tva", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $tva;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=125)
     */
    private $nom;

     /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=125)
     */
    private $marque;

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
     * @var float
     *
     * @ORM\Column(name="prix_remise", type="float")
     */
    private $prix_remise;

     /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

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
     * @return ProduitsPremium
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
     * @return ProduitsPremium
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
     * @return ProduitsPremium
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
     * @return ProduitsPremium
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
     * @param \Ecommerce\EcommerceBundle\Entity\Media $image
     * @return ProduitsPremium
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
     * Set tva
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Tva $tva
     * @return ProduitsPremium
     */
    public function setTva(\Ecommerce\EcommerceBundle\Entity\Tva $tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Tva 
     */
    public function getTva()
    {
        return $this->tva;
    }
    

    /**
     * Set boutique
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Boutiques $boutique
     * @return ProduitsPremium
     */
    public function setBoutique(\Ecommerce\EcommerceBundle\Entity\Boutiques $boutique)
    {
        $this->boutique = $boutique;

        return $this;
    }

    /**
     * Get boutique
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Boutiques 
     */
    public function getBoutique()
    {
        return $this->boutique;
    }

    /**
     * Set utilisateur
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateur
     * @return ProduitsPremium
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
     * Set quantite
     *
     * @param integer $quantite
     * @return ProduitsPremium
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set image1
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Media $image1
     * @return ProduitsPremium
     */
    public function setImage1(\Ecommerce\EcommerceBundle\Entity\Media $image1)
    {
        $this->image_1 = $image1;

        return $this;
    }

    /**
     * Get image1
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Media 
     */
    public function getImage1()
    {
        return $this->image_1;
    }

    /**
     * Set image2
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Media $image2
     * @return ProduitsPremium
     */
    public function setImage2(\Ecommerce\EcommerceBundle\Entity\Media $image2)
    {
        $this->image_2 = $image2;

        return $this;
    }

    /**
     * Get image2
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Media 
     */
    public function getImage2()
    {
        return $this->image_2;
    }

    /**
     * Set image3
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Media $image3
     * @return ProduitsPremium
     */
    public function setImage3(\Ecommerce\EcommerceBundle\Entity\Media $image3)
    {
        $this->image_3 = $image3;

        return $this;
    }

    /**
     * Get image3
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Media 
     */
    public function getImage3()
    {
        return $this->image_3;
    }

    /**
     * Set Categorie_Boutique
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Categories $categorieBoutique
     * @return ProduitsPremium
     */
    public function setCategorieBoutique(\Ecommerce\EcommerceBundle\Entity\Categories $categorieBoutique)
    {
        $this->Categorie_Boutique = $categorieBoutique;

        return $this;
    }

    /**
     * Get Categorie_Boutique
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Categories 
     */
    public function getCategorieBoutique()
    {
        return $this->Categorie_Boutique;
    }

    /**
     * Set categorie_Produit
     *
     * @param \Ecommerce\EcommerceBundle\Entity\SousCategories $categorieProduit
     * @return ProduitsPremium
     */
    public function setCategorieProduit(\Ecommerce\EcommerceBundle\Entity\SousCategories $categorieProduit)
    {
        $this->categorie_Produit = $categorieProduit;

        return $this;
    }

    /**
     * Get categorie_Produit
     *
     * @return \Ecommerce\EcommerceBundle\Entity\SousCategories 
     */
    public function getCategorieProduit()
    {
        return $this->categorie_Produit;
    }

    /**
     * Set marque
     *
     * @param string $marque
     * @return ProduitsPremium
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string 
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set prix_remise
     *
     * @param float $prixRemise
     * @return ProduitsPremium
     */
    public function setPrixRemise($prixRemise)
    {
        $this->prix_remise = $prixRemise;

        return $this;
    }

    /**
     * Get prix_remise
     *
     * @return float 
     */
    public function getPrixRemise()
    {
        return $this->prix_remise;
    }
}
