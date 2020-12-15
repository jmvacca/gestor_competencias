<?php


namespace App\Form;

use App\Entity\Resultado;
use App\Entity\ResultadoFinal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResultadoFinalType extends AbstractType
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
                    'attr'      => ['class' => 'form-control', 'name' => 'Ausente Local', 'onclick' => "checkedLocalFunction()" ]
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
                    'attr'      => ['class' => 'form-control', 'name' => 'Ausente Visitante', 'onclick' => "checkedVisitanteFunction()"]
                ])
            ->add('ganadorLocal', ChoiceType::class,
                [
                    'choices'   =>
                        [
                            'WIN' => true,
                        ],
                    'mapped'   => false,
                    'expanded'  => true,
                    'multiple'  => true,
                    'required'  => false,
                    'attr'      => ['class' => 'form-control', 'name' => 'Ganador Local','onclick' => "ganadorLocalFunction()"]
                ])
            ->add('ganadorVisitante', ChoiceType::class,
                [
                    'choices'   =>
                        [
                            'WIN' => true,
                        ],
                    'mapped'   => false,
                    'expanded'  => true,
                    'multiple'  => true,
                    'required'  => false,
                    'attr'      => ['class' => 'form-control', 'name' => 'Ganador Visitante','onclick' => "ganadorVisitanteFunction()"]
                ])
            ->add('empate', ChoiceType::class,
                [
                    'choices'   =>
                        [
                            'EMPATE' => true,
                        ],
                    'mapped'   => false,
                    'expanded'  => true,
                    'multiple'  => true,
                    'required'  => false,
                    'attr'      => ['class' => 'form-control', 'name' => 'Empate','onclick' => "empateFunction()"]
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ResultadoFinal::class,
        ]);
    }

}