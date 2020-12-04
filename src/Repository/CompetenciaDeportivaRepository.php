<?php

namespace App\Repository;

use App\Entity\CompetenciaDeportiva;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CompetenciaDeportiva|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompetenciaDeportiva|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompetenciaDeportiva[]    findAll()
 * @method CompetenciaDeportiva[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompetenciaDeportivaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompetenciaDeportiva::class);
    }






    // /**
    //  * @return CompetenciaDeportiva[] Returns an array of CompetenciaDeportiva objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CompetenciaDeportiva
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
