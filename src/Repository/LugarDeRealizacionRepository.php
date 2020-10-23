<?php

namespace App\Repository;

use App\Entity\LugarDeRealizacion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LugarDeRealizacion|null find($id, $lockMode = null, $lockVersion = null)
 * @method LugarDeRealizacion|null findOneBy(array $criteria, array $orderBy = null)
 * @method LugarDeRealizacion[]    findAll()
 * @method LugarDeRealizacion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LugarDeRealizacionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LugarDeRealizacion::class);
    }

    // /**
    //  * @return LugarDeRealizacion[] Returns an array of LugarDeRealizacion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LugarDeRealizacion
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
