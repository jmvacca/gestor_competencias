<?php


namespace App\Form;


use App\Entity\Set;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('puntaje_local', IntegerType::class,
                [
                    'attr' => ['min'=>0, 'max'=>6 ,'placeholder'=>'0 - 6','name' => 'Puntaje Local', 'title' => 'Puntaje Local', 'class' => 'form-control', 'id' => 'puntajeLocal'],
                    'required' => false,
                ])
            ->add('puntaje_visitante', IntegerType::class,
                [
                    'attr' => ['min'=>0, 'max'=>6 ,'placeholder'=>'0 - 6','name' => 'Puntaje Visitante', 'title' => 'Puntaje Visitante', 'class' => 'form-control', 'id' => 'puntajeVisitante'],
                    'required' => false,
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Set::class,
        ]);
    }
}