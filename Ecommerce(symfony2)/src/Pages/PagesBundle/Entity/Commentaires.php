<?php

namespace Pages\PagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Pages\PagesBundle\Validator\Constraints as CustomAssert;

/**
 * Commentaires
 *
 * @ORM\Table("Commentaires")
 * @ORM\Entity(repositoryClass="Pages\PagesBundle\Repository\CommentairesRepository")
 */
class Commentaires
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
    * @var datetime 
    *
    * @ORM\Column(name="date_creation", type="datetime")
    */
    private $date_creation;

     /**
     * @var integer
     *
     * @ORM\Column(name="id_article", type="integer")
     */
    private $id_article;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text")
     * @CustomAssert\contraintsCheckUrl()
     */
    private $commentaire;


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
     * @return Commentaires
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
     * Set email
     *
     * @param string $email
     * @return Commentaires
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Commentaires
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set date_creation
     *
     * @param \DateTime $dateCreation
     * @return Commentaires
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
     * Set id_article
     *
     * @param integer $idArticle
     * @return Commentaires
     */
    public function setIdArticle($idArticle)
    {
        $this->id_article = $idArticle;

        return $this;
    }

    /**
     * Get id_article
     *
     * @return integer 
     */
    public function getIdArticle()
    {
        return $this->id_article;
    }
}
