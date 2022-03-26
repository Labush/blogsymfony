<?php

namespace App\Repository;

use App\Entity\Artsite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Artsite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Artsite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Artsite[]    findAll()
 * @method Artsite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArtsiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Artsite::class);
    }

    // /**
    //  * @return Artsite[] Returns an array of Artsite objects
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
    public function findOneBySomeField($value): ?Artsite
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
