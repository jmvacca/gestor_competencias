<?php

namespace App\Form;

use App\Entity\CompetenciaDeportiva;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompetenciaDeportivaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('deporte')
            ->add('modalidad')
            ->add('permiteEmpate')
            ->add('puntosEmpate')
            ->add('puntosPartidoGanado')
            ->add('puntosPorPresentarse')
            ->add('cantidadMaximaSet')
            ->add('reglamento')
            //->add('fechaBaja')
            //->add('horaBaja')
            //->add('estado')
            //->add('usuario')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CompetenciaDeportiva::class,
        ]);
    }
}
