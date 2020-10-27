<?php

namespace App\Form;

use App\Entity\CompetenciaDeportiva;
use App\Entity\Disponibilidad;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
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
            ->add('puntosPorNoPresentarse')
            ->add('disponibilidad', CollectionType::class, [
                'entry_type' => DisponibilidadType::class,
                'entry_options' => [
                    'label' => false
                ],
                'by_reference' => false,
                'allow_add' => true,
                'allow_delete' => true
            ])
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
