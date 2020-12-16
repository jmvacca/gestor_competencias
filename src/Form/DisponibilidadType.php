<?php

namespace App\Form;

use App\Entity\Disponibilidad;
use App\Repository\LugarDeRealizacionRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;

class DisponibilidadType extends AbstractType
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $user = $this->security->getUser();
        if (!$user) {
            throw new \LogicException(
                'The FriendMessageFormType cannot be used without an authenticated user!'
            );
        }

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
                    'query_builder' => function (LugarDeRealizacionRepository $lugarDeRealizacionRepository) use ($user){
                        return $lugarDeRealizacionRepository->createQueryBuilder('ldr')
                            ->andWhere('ldr.usuario = :val')
                            ->setParameter('val', $user->getId())
                            ->orderBy('ldr.id', 'ASC')
                            ;
                    }
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
