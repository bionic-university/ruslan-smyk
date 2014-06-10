<?php

namespace RuslanSmyk\RectalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DrafteeType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('name')
            ->add('lastname')
            ->add('patronymic')
            ->add('address')
            ->add('birthday', 'date', array(
                'years' => range(1980,1996)
            ))
            ->add('inn')
            ->add('passport')
        ;


    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RuslanSmyk\RectalBundle\Entity\Draftee'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ruslansmyk_rectalbundle_draftee';
    }
}
