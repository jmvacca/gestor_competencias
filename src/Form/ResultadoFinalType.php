<?php


namespace App\Form;

use App\Entity\Resultado;
use App\Entity\ResultadoFinal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResultadoFinalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ausenteLocal')
            ->add('ausenteVisitante')
            ->add('ganadorLocal')
            ->add('ganadorVisitante')
            ->add('empate');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ResultadoFinal::class,
        ]);
    }

}