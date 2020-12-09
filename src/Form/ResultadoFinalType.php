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
                    'expanded'  => true,
                    'multiple'  => false,
                    'required'  => false,
                    'attr'      => ['class' => 'form-control', 'name' => 'Ausente Local']
                ])
            ->add('ausenteVisitante', ChoiceType::class,
                [
                    'choices'   =>
                        [
                            'SI' => true,
                        ],
                    'expanded'  => true,
                    'multiple'  => false,
                    'required'  => false,
                    'attr'      => ['class' => 'form-control', 'name' => 'Ausente Visitante']
                ])
            ->add('ganadorLocal', ChoiceType::class,
                [
                    'choices'   =>
                        [
                            'SI' => true,
                        ],
                    'expanded'  => true,
                    'multiple'  => false,
                    'required'  => false,
                    'attr'      => ['class' => 'form-control', 'name' => 'Ganador Local']
                ])
            ->add('ganadorVisitante', ChoiceType::class,
                [
                    'choices'   =>
                        [
                            'SI' => true,
                        ],
                    'expanded'  => true,
                    'multiple'  => false,
                    'required'  => false,
                    'attr'      => ['class' => 'form-control', 'name' => 'Ganador Visitante']
                ])
            ->add('empate', ChoiceType::class,
                [
                    'choices'   =>
                        [
                            'EMPATE' => true,
                        ],
                    'expanded'  => true,
                    'multiple'  => false,
                    'required'  => false,
                    'attr'      => ['class' => 'form-control', 'name' => 'Empate']
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ResultadoFinal::class,
        ]);
    }

}