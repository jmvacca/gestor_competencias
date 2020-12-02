<?php

namespace App\Repository;

use App\Entity\Participante;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Participante|null find($id, $lockMode = null, $lockVersion = null)
 * @method Participante|null findOneBy(array $criteria, array $orderBy = null)
 * @method Participante[]    findAll()
 * @method Participante[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParticipanteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Participante::class);
    }

     /**
      * @return Participante[] Returns an array of Participante objects
      */
    public function findByCompetencia($id_competencia)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.competenciaDeportiva = :val')
            ->setParameter('val', $id_competencia)
            ->orderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?Participante
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
