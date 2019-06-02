<?php

namespace App\Repository;

use App\Entity\AdmissionForm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AdmissionForm|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdmissionForm|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdmissionForm[]    findAll()
 * @method AdmissionForm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdmissionFormRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AdmissionForm::class);
    }

    // /**
    //  * @return AdmissionForm[] Returns an array of AdmissionForm objects
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
    public function findOneBySomeField($value): ?AdmissionForm
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
