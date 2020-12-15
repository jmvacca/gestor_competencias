<?php

namespace App\Form;

use App\Entity\Participante;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class ParticipanteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class,
                [
                    'attr'      => ['style' => 'text-transform:uppercase', 'title' => 'Nombre', 'placeholder' => 'Introduce el Nombre', 'maxlength' => '70', 'class' => 'form-control', 'id' => 'participante_nombre'],
                    'required'  => true,
                ])
            ->add('email', TextType::class,
                [
                    'attr'      => ['style' => 'text-transform:uppercase', 'type' => 'email', 'title' => 'Email', 'placeholder' => 'Introduce el email', 'maxlength' => '100', 'class' => 'form-control', 'id' => 'participante_email', 'pattern'=>".+@.+.com"],
                    'required'  => true,
                ])
            ->add('imagen', FileType::class,

                [

                    'label'     => 'Seleccionar Imagen',
                    'mapped'    => false,
                    'required'  => false,
                    'attr' =>
                        [
                            'type' => 'file',
                            'lang' => 'es',
                            'accept' => 'image/png, image/jpeg, image/gif',
                            'class' => "form-control",
                            'title'   => 'Seleccione una imagen',

                        ],
                    'constraints' =>
                        [
                            new File([
                                'maxSize'   => '20480k',
                                'mimeTypes' =>
                                    [
                                        'image/png',
                                        'image/jpeg',
                                        'image/gif',
                                    ],
                                'mimeTypesMessage' => 'Los formatos validos son: PNG, JPG y GIF.',
                                'maxSizeMessage' => 'El tamaño maximo de archivo permitido es 20MB',
                            ])
                        ],
                ])
            //->add('competenciaDeportiva')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Participante::class,
        ]);
    }
}
