<?php

namespace Ecommerce\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class UtilisateursAdressesType extends AbstractType
{
    private $em;
    
    public function __construct($em) 
    {
        $this->em = $em;
    }
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom','text', array('label' => "Prénom"))
            ->add('telephone','number', array('label' => "Téléphone ",'pattern' => "[0-9]+"))
            ->add('adresse')
            ->add('code_postal','number', array('pattern' => "[0-9]+", 'attr' => array('class' => 'code_postal',
                                                   'maxlength' => 5)))
            ->add('pays')
            ->add('complement',null,array('required' => false))
            //->add('utilisateur')
        ;
        
        $city = function(FormInterface $form, $code_postal) {
            $villeCodePostal = $this->em->getRepository('UtilisateursBundle:Villes')->findBy(array('villeCodePostal' => $code_postal));

            if ($villeCodePostal) {
                $villes = array();
                foreach($villeCodePostal as $ville) {
                    $villes[$ville->getVilleNom()] = $ville->getVilleNom();
                }
            } else {
                $villes = null;
            }

            $form->add('ville','choice', array('attr' => array('class'   => 'ville'),
                                               'choices' => $villes));
        }; 
        
        $builder->get('code_postal')->addEventListener(FormEvents::POST_SUBMIT, function(FormEvent $event) use ($city) {
            $city($event->getForm()->getParent(),$event->getForm()->getData());
        });
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ecommerce_ecommercebundle_utilisateursadresses';
    }
}
