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
            ->add('puntajeLocal', IntegerType::class,
                [
                    'attr'      => ['min'=>0, 'max'=>7 ,'placeholder'=>'0 - 7','name' => 'Puntaje Local', 'title' => 'Puntaje Local', 'class' => 'form-control', 'id' => 'puntajeLocal','onkeyup' => "this.value = mMaxV(this,this.value)"],
                    'required'  => false,
                ])
            ->add('puntajeVisitante', IntegerType::class,
                [
                    'attr'      => ['min'=>0, 'max'=>7 ,'placeholder'=>'0 - 7','name' => 'Puntaje Visitante', 'title' => 'Puntaje Visitante', 'class' => 'form-control', 'id' => 'puntajeVisitante','onkeyup' => "this.value = mMaxV(this,this.value)"],
                    'required'  => false,
                ])
            ->add('numeroDeSet', IntegerType::class,
                [
                    'attr'      => ['name' => 'Numero', 'title' => 'Numero', 'class' => 'form-control', 'id' => 'numero'],
                    'required'  => false,
                    'disabled'  => true,
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