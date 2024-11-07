<?php

namespace App\Repository;

use App\Entity\Asistentes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Asistentes>
 *
 * @method Asistentes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Asistentes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Asistentes[]    findAll()
 * @method Asistentes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AsistentesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Asistentes::class);
    }

//    /**
//     * @return Asistentes[] Returns an array of Asistentes objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Asistentes
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
