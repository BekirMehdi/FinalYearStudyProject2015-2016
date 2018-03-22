<?php

namespace Proxies\__CG__\Ecommerce\EcommerceBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ProduitsPremium extends \Ecommerce\EcommerceBundle\Entity\ProduitsPremium implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array('image' => NULL, 'image_1' => NULL, 'image_2' => NULL, 'image_3' => NULL, 'Categorie_Boutique' => NULL);



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        unset($this->image, $this->image_1, $this->image_2, $this->image_3, $this->Categorie_Boutique);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', array($name));

            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);
    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', array($name, $value));

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', array($name));

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'id', 'image', 'image_1', 'image_2', 'image_3', 'Categorie_Boutique', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'categorie_Produit', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'boutique', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'utilisateur', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'tva', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'nom', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'marque', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'description', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'prix', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'prix_remise', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'quantite', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'disponible');
        }

        return array('__isInitialized__', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'id', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'categorie_Produit', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'boutique', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'utilisateur', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'tva', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'nom', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'marque', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'description', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'prix', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'prix_remise', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'quantite', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\ProduitsPremium' . "\0" . 'disponible');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ProduitsPremium $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->image, $this->image_1, $this->image_2, $this->image_3, $this->Categorie_Boutique);
        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix($prix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', array($prix));

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', array());

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisponible($disponible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisponible', array($disponible));

        return parent::setDisponible($disponible);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisponible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisponible', array());

        return parent::getDisponible();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(\Ecommerce\EcommerceBundle\Entity\Media $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', array($image));

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', array());

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setTva(\Ecommerce\EcommerceBundle\Entity\Tva $tva)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTva', array($tva));

        return parent::setTva($tva);
    }

    /**
     * {@inheritDoc}
     */
    public function getTva()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTva', array());

        return parent::getTva();
    }

    /**
     * {@inheritDoc}
     */
    public function setBoutique(\Ecommerce\EcommerceBundle\Entity\Boutiques $boutique)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBoutique', array($boutique));

        return parent::setBoutique($boutique);
    }

    /**
     * {@inheritDoc}
     */
    public function getBoutique()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBoutique', array());

        return parent::getBoutique();
    }

    /**
     * {@inheritDoc}
     */
    public function setUtilisateur(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateur = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUtilisateur', array($utilisateur));

        return parent::setUtilisateur($utilisateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getUtilisateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUtilisateur', array());

        return parent::getUtilisateur();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantite($quantite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantite', array($quantite));

        return parent::setQuantite($quantite);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantite', array());

        return parent::getQuantite();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage1(\Ecommerce\EcommerceBundle\Entity\Media $image1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage1', array($image1));

        return parent::setImage1($image1);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage1', array());

        return parent::getImage1();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage2(\Ecommerce\EcommerceBundle\Entity\Media $image2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage2', array($image2));

        return parent::setImage2($image2);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage2', array());

        return parent::getImage2();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage3(\Ecommerce\EcommerceBundle\Entity\Media $image3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage3', array($image3));

        return parent::setImage3($image3);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage3', array());

        return parent::getImage3();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorieBoutique(\Ecommerce\EcommerceBundle\Entity\Categories $categorieBoutique)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorieBoutique', array($categorieBoutique));

        return parent::setCategorieBoutique($categorieBoutique);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorieBoutique()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorieBoutique', array());

        return parent::getCategorieBoutique();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorieProduit(\Ecommerce\EcommerceBundle\Entity\SousCategories $categorieProduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorieProduit', array($categorieProduit));

        return parent::setCategorieProduit($categorieProduit);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorieProduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorieProduit', array());

        return parent::getCategorieProduit();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarque($marque)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarque', array($marque));

        return parent::setMarque($marque);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarque()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarque', array());

        return parent::getMarque();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixRemise($prixRemise)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixRemise', array($prixRemise));

        return parent::setPrixRemise($prixRemise);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixRemise()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixRemise', array());

        return parent::getPrixRemise();
    }

}