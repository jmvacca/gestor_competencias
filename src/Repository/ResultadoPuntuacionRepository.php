<?php

namespace App\Repository;

use App\Entity\ResultadoPuntuacion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ResultadoPuntuacion|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResultadoPuntuacion|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResultadoPuntuacion[]    findAll()
 * @method ResultadoPuntuacion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResultadoPuntuacionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResultadoPuntuacion::class);
    }

    // /**
    //  * @return ResultadoPuntuacion[] Returns an array of ResultadoPuntuacion objects
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
    public function findOneBySomeField($value): ?ResultadoPuntuacion
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
