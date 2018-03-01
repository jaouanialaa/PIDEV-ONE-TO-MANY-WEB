<?php

namespace SuiviBundle\Repository;

/**
 * RegimeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RegimeRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByIdNutri($id) {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('u')
            ->from($this->_entityName, 'u')
            ->where('u.nutritionniste = :idnutri')
            ->setParameter('idnutri', $id);
        return $qb->getQuery()->getResult();
    }

}
