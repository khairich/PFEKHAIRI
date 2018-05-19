<?php

namespace Khairi\SNEspritBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SkillType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('symfony')
        ->add('java')
        ->add('angular')
        ->add('pHP')
        ->add('html')
        ->add('c')
        ->add('ajax')
        ->add('css')
        ->add('linux')
        ->add('j2EE')
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Khairi\SNEspritBundle\Entity\Skill'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'khairi_snespritbundle_skill';
    }


}
