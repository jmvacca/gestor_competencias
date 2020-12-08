<?php


namespace App\Form;


use App\Entity\ResultadoSets;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResultadoSetsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ausenteLocal')
            ->add('ausenteVisitante')
            ->add('sets', CollectionType::class,
                [
                    'entry_type' => SetType::class,
                    'entry_options' => [ 'label' => false  ],
                //    'allow_add' => true,
                //    'allow_delete' => true,
                    'by_reference' => false
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ResultadoSets::class,
        ]);
    }
}