<?php

namespace App\Repository;

use App\Entity\Tracks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tracks>
 *
 * @method Tracks|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tracks|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tracks[]    findAll()
 * @method Tracks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TracksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tracks::class);
    }

//    /**
//     * @return Tracks[] Returns an array of Tracks objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Tracks
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
