<?php

namespace App\Repository;

use App\Entity\Rapadura;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Rapadura|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rapadura|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rapadura[]    findAll()
 * @method Rapadura[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RapaduraRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Rapadura::class);
    }

    // /**
    //  * @return Rapadura[] Returns an array of Rapadura objects
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
    public function findOneBySomeField($value): ?Rapadura
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
