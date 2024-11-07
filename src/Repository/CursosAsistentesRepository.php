<?php

namespace App\Repository;

use App\Entity\CursosAsistentes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CursosAsistentes>
 *
 * @method CursosAsistentes|null find($id, $lockMode = null, $lockVersion = null)
 * @method CursosAsistentes|null findOneBy(array $criteria, array $orderBy = null)
 * @method CursosAsistentes[]    findAll()
 * @method CursosAsistentes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CursosAsistentesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CursosAsistentes::class);
    }

//    /**
//     * @return CursosAsistentes[] Returns an array of CursosAsistentes objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CursosAsistentes
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
