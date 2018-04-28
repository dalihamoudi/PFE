<?php

namespace Admin\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DetailCmdType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quantite')
            ->add('gadgetQuantite')
            ->add('pGHTActuel')
            ->add('commentaire')
            ->add('matMemoPGHTActuel')
            ->add('grpProduit')
            ->add('specialitesD')
            ->add('cmd')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\TestBundle\Entity\DetailCmd'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_testbundle_detailcmd';
    }
}
