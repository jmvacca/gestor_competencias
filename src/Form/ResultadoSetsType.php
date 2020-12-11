<?php


namespace App\Form;


use App\Entity\ResultadoSets;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResultadoSetsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ausenteLocal', ChoiceType::class,
                [
                    'choices'   =>
                        [
                            'SI' => true,
                        ],
                    'mapped'   => false,
                    'expanded'  => true,
                    'multiple'  => true,
                    'required'  => false,
                    'attr'      => ['class' => 'form-control', 'name' => 'Ausente Local', 'onclick' => "checkedLocalSetFunction()"]
                ])
            ->add('ausenteVisitante', ChoiceType::class,
                [
                    'choices'   =>
                        [
                            'SI' => true,
                        ],
                    'mapped'   => false,
                    'expanded'  => true,
                    'multiple'  => true,
                    'required'  => false,
                    'attr'      => ['class' => 'form-control', 'name' => 'Ausente Visitante', 'onclick' => "checkedVisitanteSetFunction()"]
                ])
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