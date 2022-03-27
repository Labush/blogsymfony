<?php

namespace App\Repository;

use App\Entity\Artreseauxsociaux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Artreseauxsociaux|null find($id, $lockMode = null, $lockVersion = null)
 * @method Artreseauxsociaux|null findOneBy(array $criteria, array $orderBy = null)
 * @method Artreseauxsociaux[]    findAll()
 * @method Artreseauxsociaux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArtreseauxsociauxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Artreseauxsociaux::class);
    }

    // /**
    //  * @return Artreseauxsociaux[] Returns an array of Artreseauxsociaux objects
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
    public function findOneBySomeField($value): ?Artreseauxsociaux
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
