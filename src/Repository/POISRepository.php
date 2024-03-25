<?php

namespace App\Repository;

use App\Entity\POIS;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<POIS>
 *
 * @method POIS|null find($id, $lockMode = null, $lockVersion = null)
 * @method POIS|null findOneBy(array $criteria, array $orderBy = null)
 * @method POIS[]    findAll()
 * @method POIS[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class POISRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, POIS::class);
    }

//    /**
//     * @return POIS[] Returns an array of POIS objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?POIS
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
