<?php

namespace App\Repository;

use App\Entity\Wasabi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Wasabi|null find($id, $lockMode = null, $lockVersion = null)
 * @method Wasabi|null findOneBy(array $criteria, array $orderBy = null)
 * @method Wasabi[]    findAll()
 * @method Wasabi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WasabiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Wasabi::class);
    }

    // /**
    //  * @return Wasabi[] Returns an array of Wasabi objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Wasabi
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
