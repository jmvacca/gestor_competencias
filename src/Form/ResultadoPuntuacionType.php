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
                    'mapped'   => false,
                    'expanded'  => true,
                    'multiple'  => true,
                    'required'  => false,
                    'attr'      => ['class' => 'form-control', 'name' => 'Ausente Local', 'onclick' => "checkedLocalFunction()"]
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
            /*->add('ausente', ChoiceType::class,
                [
                    'choices'   =>
                        [
                            'PARTICIPANTE 1' => 'ausenteLocal',
                            'PARTICIPANTE 2' => 'ausenteVisitante',
                        ],
                    'mapped'   => false,
                    'expanded' => true,
                    'multiple' => true,
                    'required' => false,
                    'attr'      => ['class' => 'form-control', 'name' => 'Ausente']
                ])*/
            ->add('resultadoLocal', IntegerType::class,
                [
                    'attr'      => ['min'=>0, 'max'=>9999, 'placeholder'=>'0 - 9999','onkeyup' => "this.value = mMaxV(this,this.value)", 'name' => 'Resultado Local', 'title' => 'Resultado Local', 'class' => 'form-control', 'id' => 'resultadoLocal',],
                    'required'  => false,
                ])
            ->add('resultadoVisitante', IntegerType::class,
                [
                    'attr'      => ['min'=>0, 'max'=>9999, 'placeholder'=>'0 - 9999', 'onkeyup' => "this.value = mMaxV(this,this.value)", 'name' => 'Resultado Visitante', 'title' => 'Resultado Visitante', 'class' => 'form-control', 'id' => 'resultadoVisitante'],
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