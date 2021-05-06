<?php

namespace App\Repository;

use App\Entity\Administrer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Administrer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Administrer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Administrer[]    findAll()
 * @method Administrer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdministrerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Administrer::class);
    }

    // /**
    //  * @return Administrer[] Returns an array of Administrer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Administrer
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
