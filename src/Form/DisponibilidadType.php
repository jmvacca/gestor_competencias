<?php

namespace App\Form;

use App\Entity\Disponibilidad;
use App\Entity\LugarDeRealizacion;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DisponibilidadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('disponibilidad', IntegerType::class,
                [
                    'attr' => ['name'=>'disponibilidad','title'=>'Disponibilidad','class'=>'form-control'],
                    'required' => true,
                ])
            ->add('lugar', EntityType::class,
                [
                    'attr' => ['style' => 'text-transform:uppercase', 'name' => 'Lugar de Realizacion', 'title' => 'Lugar de Realizacion', 'class' => 'form-control'],
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
