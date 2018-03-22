<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tva
 *
 * @ORM\Table("Tva")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\TvaRepository")
 */
class Tva
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
     * @var float
     *
     * @ORM\Column(name="multiplicate", type="float")
     */
    private $taux_tva;
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=125)
     */
    private $nom;

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
     * @return Tva
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
    
    public function __toString()
    {
        return $this->getNom();
    }

    /**
     * Set taux_tva
     *
     * @param float $tauxTva
     * @return Tva
     */
    public function setTauxTva($tauxTva)
    {
        $this->taux_tva = $tauxTva;

        return $this;
    }

    /**
     * Get taux_tva
     *
     * @return float 
     */
    public function getTauxTva()
    {
        return $this->taux_tva;
    }
}
