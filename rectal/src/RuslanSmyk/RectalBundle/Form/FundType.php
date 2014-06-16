<?php

namespace RuslanSmyk\RectalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FundType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateUnfitness')
            ->add('why')
            ->add('draftee')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RuslanSmyk\RectalBundle\Entity\Fund'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ruslansmyk_rectalbundle_fund';
    }
}
