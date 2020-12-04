<?php

namespace App\Form;

use App\Entity\Disponibilidad;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DisponibilidadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('disponibilidad', IntegerType::class,
                [
                    'attr' => ['min'=>1, 'max'=>9999 ,'placeholder'=>'1 - 999','name' => 'Disponibilidad', 'title' => 'Disponibilidad', 'class' => 'form-control', 'id' => 'Disponibilidad'],
                    'required' => true,
                ])
            ->add('lugar', EntityType::class,
                [
                    'attr' => ['name' => 'Lugar','title' => 'Lugar', 'class' => 'form-control','id' => 'lugar'],
                    'class' => 'App\Entity\LugarDeRealizacion',
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Disponibilidad::class,
        ]);
    }
}
