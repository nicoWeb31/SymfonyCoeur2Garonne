<?php

namespace App\Repository;

use App\Entity\UserCat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserCat|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserCat|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserCat[]    findAll()
 * @method UserCat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserCatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserCat::class);
    }

    // /**
    //  * @return UserCat[] Returns an array of UserCat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserCat
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
