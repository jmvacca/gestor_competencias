<?php


namespace App\Form;


use App\Entity\ResultadoFinal;
use App\Entity\ResultadoPuntuacion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResultadoPuntuacionType extends AbstractType
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
                    'multiple'  => true,
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
                    'multiple'  => true,
                    'required'  => false,
                    'attr'      => ['class' => 'form-control', 'name' => 'Ausente Visitante']
                ])
            ->add('resultadoLocal', IntegerType::class,
                [
                    'attr'      => ['min'=>0,'onkeyup' => "this.value = mMaxV(this,this.value)", 'name' => 'Resultado Local', 'title' => 'Resultado Local', 'class' => 'form-control', 'id' => 'resultadoLocal'],
                    'required'  => false,
                ])
            ->add('resultadoVisitante', IntegerType::class,
                [
                    'attr'      => ['min'=>0,'onkeyup' => "this.value = mMaxV(this,this.value)", 'name' => 'Resultado Visitante', 'title' => 'Resultado Visitante', 'class' => 'form-control', 'id' => 'resultadoVisitante'],
                    'required'  => false,
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ResultadoPuntuacion::class,
        ]);
    }
}