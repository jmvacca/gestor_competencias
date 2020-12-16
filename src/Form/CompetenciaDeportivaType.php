<?php

namespace App\Form;

use App\Entity\CompetenciaDeportiva;
use App\Entity\Deporte;
use App\Entity\Disponibilidad;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompetenciaDeportivaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class,
                [
                    'attr' => ['style' => 'text-transform:uppercase', 'title' => 'Nombre', 'placeholder' => 'Introduce el Nombre', 'maxlength' => '20', 'class' => 'form-control', 'id' => 'NombreCompetencia'],
                    'required' => false,
                     'invalid_message' => 'Valor Inválido! - Debe tener nombre de al menos %num% caracteres',
                    'invalid_message_parameters' => array('%num%' => 20),
                ])
            ->add('modalidad', EntityType::class,
                [
                    'attr' => ['name' => 'Modalidad','title' => 'Modalidad', 'class' => 'form-control', 'id' => 'modalidad'],
                    'class' => 'App\Entity\Modalidad',
                ])
            ->add('permiteEmpate', ChoiceType::class,
                [
                    'choices' =>
                        [
                            'Si' => true,
                            'No' => false,

                        ],
                    'placeholder' => false,
                    'expanded' => false,
                    'multiple' => false,
                    'attr' => ['name' => 'Empate','title' => 'Permite empate?', 'class' => 'form-control', 'id' => 'sie'],
                    'required' => false,
                ])
            ->add('puntosEmpate', IntegerType::class,
                [
                    'attr' => ['max'=> 999,'min'=>0,'placeholder'=>'0 - 999', 'onkeyup' => "this.value = mMaxV(this,this.value)", 'name' => 'PPE', 'title' => 'Puntos por empate', 'class' => 'form-control', 'id' => 'PPE'],
                    'required' => false,
                ])
            ->add('puntosPartidoGanado', IntegerType::class,
                [
                    'attr' => ['max'=> 999,'min'=>1,'placeholder'=>'1 - 999', 'onkeyup' => "this.value = mMaxV(this,this.value)", 'name' => 'PPG', 'title' => 'Puntos por partidos ganados', 'class' => 'form-control', 'id' => 'PPG'],
                    'required' => false,

                ])
            ->add('puntosPorPresentarse', IntegerType::class,
                [
                    'attr' => ['max'=> 999,'min'=>0,'placeholder'=>'0 - 999','onkeyup' => "this.value = mMaxV(this,this.value)", 'name' => 'PPPRE', 'title' => 'Puntos por presentarse', 'class' => 'form-control', 'id' => 'PPPRE'],
                    'required' => false,
                ])
            ->add('cantidadMaximaSet', ChoiceType::class,
                [
                    'choices'  => [
                        '1' => 1,
                        '3' => 3,
                        '5' => 5,
                        ],
                    'attr' => ['id' => 'csets', 'name' => 'sets', 'class' => 'form-control',],
                    'required' => false,
                    'placeholder'=>false,
                ])
            ->add('reglamento', TextareaType::class,
                [
                    'attr' => ['class' => 'form-control', 'name' => 'Reglamento', 'placeholder'=>'Ingrese un reglamento (opcional)'],
                    'required' => false,
                ])
            ->add('puntosPorNoPresentarse', IntegerType::class,
                [
                    'attr' => ['max'=> 999,'min'=>1, 'onkeyup' => "this.value = mMaxV(this,this.value)", 'placeholder'=>'1 - 999','name' => 'puntuacionwo', 'title' => 'Puntos por no presentarse', 'class' => 'form-control', 'id' => 'puntuacionwo'],
                    'required' => false,

                ])
            ->add('disponibilidades', CollectionType::class,
                [
                    'entry_type' => DisponibilidadType::class,
                    'entry_options' => [ 'label' => false  ],
                    'allow_add' => true,
                    'allow_delete' => true,
                    'by_reference' => false
                ]
            )
            ->add('deporte', EntityType::class,
                [
                    'attr' => ['name' => 'Deporte','title' => 'Deporte', 'class' => 'form-control','id' => 'deporte'],
                    'class' => 'App\Entity\Deporte',
                ])
        ;
            //->add('fechaBaja')
            //->add('horaBaja')
            //->add('estado')
            //->add('usuario')
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CompetenciaDeportiva::class,



        ]);
    }
}
