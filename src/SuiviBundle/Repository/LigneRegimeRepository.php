<?php

namespace SuiviBundle\Repository;

/**
 * LigneRegimeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LigneRegimeRepository extends \Doctrine\ORM\EntityRepository
{
    public function testLR($user,$regime)
    {
        $qb = $this->createQueryBuilder('l')
            ->select('l')
            ->where('l.regime = :regime')
            ->setParameter('regime',$regime)
            ->andWhere('l.user = :user')
            ->setParameter('user',$user);
        return $qb->getQuery()->getOneOrNullResult();
    }
}
