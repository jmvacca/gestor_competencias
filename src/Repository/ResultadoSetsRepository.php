<?php

namespace App\Repository;

use App\Entity\ResultadoSets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ResultadoSets|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResultadoSets|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResultadoSets[]    findAll()
 * @method ResultadoSets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResultadoSetsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResultadoSets::class);
    }

    // /**
    //  * @return ResultadoSets[] Returns an array of ResultadoSets objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ResultadoSets
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
