<?php

namespace App\Repository;

use App\Entity\Certificados;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Certificados>
 *
 * @method Certificados|null find($id, $lockMode = null, $lockVersion = null)
 * @method Certificados|null findOneBy(array $criteria, array $orderBy = null)
 * @method Certificados[]    findAll()
 * @method Certificados[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CertificadosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Certificados::class);
    }

//    /**
//     * @return Certificados[] Returns an array of Certificados objects
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

//    public function findOneBySomeField($value): ?Certificados
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
