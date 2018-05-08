<?php

namespace Admin\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DepenceBudgetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pFDEPENCEBUDGETOBJ')
            ->add('pFDEPENCEBUDGETDESC')
            ->add('pFDEPENCEBUDGETDate')
            ->add('pFDEPENCEBUDGETFacDate')
            ->add('pFDEPENCEBUDGETNumber')
            ->add('pFDEPENCEBUDGETFacNumber')
            ->add('pFDEPENCEBUDGETPRIXHT')
            ->add('pFDEPENCEBUDGETQTE')
            ->add('pFDEPENCEBUDGETTTC')
            ->add('etats')
            ->add('GroupeProduits')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\TestBundle\Entity\DepenceBudget'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_testbundle_depencebudget';
    }
}
