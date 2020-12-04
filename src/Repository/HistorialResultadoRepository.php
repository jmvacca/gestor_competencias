<?php

namespace App\Repository;

use App\Entity\HistorialResultado;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HistorialResultado|null find($id, $lockMode = null, $lockVersion = null)
 * @method HistorialResultado|null findOneBy(array $criteria, array $orderBy = null)
 * @method HistorialResultado[]    findAll()
 * @method HistorialResultado[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HistorialResultadoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HistorialResultado::class);
    }

    // /**
    //  * @return HistorialResultado[] Returns an array of HistorialResultado objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HistorialResultado
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
