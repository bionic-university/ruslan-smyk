<?php

namespace RuslanSmyk\RectalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReservistType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateIn')
            ->add('dateOut')
            ->add('draftee')
            ->add('unit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RuslanSmyk\RectalBundle\Entity\Reservist'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ruslansmyk_rectalbundle_reservist';
    }
}
