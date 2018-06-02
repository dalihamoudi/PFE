<?php

namespace Admin\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DelegueType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pFNom')
            ->add('pFPrenom')
            ->add('pFDateEmb')
            ->add('pFDateSortie')
            ->add('pFTel')
            ->add('pFEmail')
            ->add('pFPhoto')
            ->add('pFCommentaire')
            ->add('pFLogin')
            ->add('pFHashPWD')
            ->add('pFOrantOption')
            ->add('pFEtat')
            ->add('diplome')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\TestBundle\Entity\Delegue'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_testbundle_delegue';
    }
}
