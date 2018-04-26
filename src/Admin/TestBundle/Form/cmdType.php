<?php

namespace Admin\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class cmdType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pFCMDPHDate')
            ->add('client')
            ->add('delgues')
            ->add('submit', 'submit', array('label' => 'Create'))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\TestBundle\Entity\cmd'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_testbundle_cmd';
    }
}
