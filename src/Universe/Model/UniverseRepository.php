<?php

declare(strict_types=1);

namespace GC\Universe\Model;

use Doctrine\ORM\EntityRepository;

final class UniverseRepository extends EntityRepository
{
    /**
     * @param int $universeId
     *
     * @throws \Doctrine\ORM\NonUniqueResultException
     *
     * @return \GC\Universe\Model\Universe|null
     */
	public function findById(int $universeId): ?Universe
    {
		return $this->createQueryBuilder('universe')
		    ->where('universe.universeId = :universeId')
            ->setParameter(':universeId', $universeId)
            ->getQuery()
            ->getOneOrNullResult();
	}

    /**
     * @param string|null $name
     *
     * @throws \Doctrine\ORM\NonUniqueResultException
     *
     * @return \GC\Universe\Model\Universe|null
     */
    public function findByName(?string $name): ?Universe
    {
        if ($name === null) {
            return null;
        }

        return $this->createQueryBuilder('universe')
            ->where('universe.name = :name')
            ->setParameter(':name', $name)
            ->getQuery()
            ->getOneOrNullResult();
    }
}