<?php

namespace App\Repository;

use App\Entity\Disponibilidad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Disponibilidad|null find($id, $lockMode = null, $lockVersion = null)
 * @method Disponibilidad|null findOneBy(array $criteria, array $orderBy = null)
 * @method Disponibilidad[]    findAll()
 * @method Disponibilidad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DisponibilidadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Disponibilidad::class);
    }

    // /**
    //  * @return Disponibilidad[] Returns an array of Disponibilidad objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Disponibilidad
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
