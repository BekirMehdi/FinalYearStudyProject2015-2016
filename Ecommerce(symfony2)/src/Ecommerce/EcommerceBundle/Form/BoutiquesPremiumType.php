<?php

namespace Ecommerce\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BoutiquesPremiumType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder
            ->add('nom')
            ->add('description')
            ->add('telephone','number', array('label' => "Téléphone",'pattern' => "[0-9]+"))
            ->add('adresseEmail', 'email', array('label' => "Adresse email",'pattern' => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$'))
            ->add('adresse', 'textarea', array('attr' => array('rows' => '5','cols' => '5')))
            ->add('fb','text', array('label' => "Lien facebook","data" => "https://www.facebook.com/"))
            ->add('twi' ,'text', array('label' => "Lien twitter","data" => "https://twitter.com/"))
            ->add('goog' ,'text', array('label' => "Lien google plus","data" => "https://plus.google.com/"))
            ->add('yout' ,'text', array('label' => "Lien youtube","data" => "https://www.youtube.com/"))
            ->add('image',new MediaType())
            ->add('categorie')
            ->add('utilisateur')
            ->add('lng','text', array('required' => false,'label' => false,
                                                'attr' => array('class' => 'ecommerce_ecommercebundle_boutiquespremium_lng')))
            ->add('atitud','text', array('required' => false,'label' => false,
                                                'attr' => array('class' => 'ecommerce_ecommercebundle_boutiquespremium_atitud')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ecommerce\EcommerceBundle\Entity\BoutiquesPremium'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ecommerce_ecommercebundle_boutiquespremium';
    }
}
