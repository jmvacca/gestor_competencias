<?php


namespace App\Form;


use App\Entity\ResultadoFinal;
use App\Entity\ResultadoPuntuacion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResultadoPuntuacionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ausenteLocal')
            ->add('ausenteVisitante')
            ->add('resultadoLocal')
            ->add('resultadoVisitante');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ResultadoPuntuacion::class,
        ]);
    }
}