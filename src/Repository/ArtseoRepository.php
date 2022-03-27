<?php

namespace App\Repository;

use App\Entity\Artseo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Artseo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Artseo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Artseo[]    findAll()
 * @method Artseo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArtseoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Artseo::class);
    }

    // /**
    //  * @return Artseo[] Returns an array of Artseo objects
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
    public function findOneBySomeField($value): ?Artseo
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
