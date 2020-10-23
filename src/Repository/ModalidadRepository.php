<?php

namespace App\Repository;

use App\Entity\Modalidad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Modalidad|null find($id, $lockMode = null, $lockVersion = null)
 * @method Modalidad|null findOneBy(array $criteria, array $orderBy = null)
 * @method Modalidad[]    findAll()
 * @method Modalidad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModalidadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Modalidad::class);
    }

    // /**
    //  * @return Modalidad[] Returns an array of Modalidad objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Modalidad
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
