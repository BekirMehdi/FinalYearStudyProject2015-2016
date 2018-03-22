<?php

namespace Ecommerce\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SuperProduitsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('marque')
            ->add('description','textarea',array('attr' => array('class' => 'ckeditor')))
            ->add('prix','number', array('label' => "prix",'pattern' => "[0-9.]*"))
            ->add('prix_remise','number', array('label' => "remise de prix",'pattern' => "[0-9.]*"))
            ->add('quantite','number', array('label' => "Quantité",'pattern' => "[0-9.]*"))
            ->add('image', new MediaType())
            ->add('image_1',  new MediaType())
            ->add('image_2',  new MediaType())
            ->add('image_3', new MediaType())
            ->add('Categorie_Boutique')
            ->add('categorie_Produit')
            ->add('boutique')
            ->add('utilisateur')
            ->add('tva')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ecommerce\EcommerceBundle\Entity\Produits'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ecommerce_ecommercebundle_produits';
    }
}
