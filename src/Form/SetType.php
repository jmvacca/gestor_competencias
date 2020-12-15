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
                    'attr'      => ['required'  => true, 'min'=>0, 'max'=>31 ,'placeholder'=>'0 - 31','name' => 'Puntaje Local', 'title' => 'Puntaje Local', 'class' => 'form-control', 'id' => 'puntajeLocal','onkeyup' => "this.value = mMaxL(this,this.value)", 'onchange'=>"this.value = igualLocal(this,this.value)"],
                    'required'  => false,
                ])
            ->add('puntajeVisitante', IntegerType::class,
                [
                    'attr'      => ['required'  => true,'min'=>0, 'max'=>31 ,'placeholder'=>'0 - 31','name' => 'Puntaje Visitante', 'title' => 'Puntaje Visitante', 'class' => 'form-control', 'id' => 'puntajeVisitante','onkeyup' => "this.value = mMaxV(this,this.value)",'onchange'=>"this.value = igualVisitante(this,this.value)"],
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