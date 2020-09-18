<?php

namespace App\Repository;

use App\Entity\Ginger;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ginger|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ginger|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ginger[]    findAll()
 * @method Ginger[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GingerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ginger::class);
    }

    // /**
    //  * @return Ginger[] Returns an array of Ginger objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ginger
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
