<?php

namespace Ecommerce\EcommerceBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ProduitsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProduitsRepository extends EntityRepository
{
    public function byBoutique($boutique)
    {
         $qb = $this->createQueryBuilder('u')
                    ->select('u')
                    ->where('u.boutique = :boutique')
                    ->andWhere('u.disponible = 1')
                    ->orderBy('u.id')
                    ->setParameter('boutique', $boutique);
        return $qb->getQuery()->getResult();
    }

    public function findArray($array)
    {
        $qb = $this->createQueryBuilder('u')
                ->Select('u')
                ->Where('u.id IN (:array)')
                ->setParameter('array', $array);
        return $qb->getQuery()->getResult();
    }
    
    public function bySousCategorie($categorie_Produit)
    {
         $qb = $this->createQueryBuilder('u')
                    ->select('u')
                    ->where('u.categorie_Produit = :categorie_Produit')
                    ->orderBy('u.id')
                    ->setParameter('categorie_Produit', $categorie_Produit);
        return $qb->getQuery()->getResult();
    }
    
    public function rechercheProduits($chaine,$test1)
    {
         $qb = $this->createQueryBuilder('u')
                    ->select('u')
                    ->where('u.nom like :chaine')
                    ->andWhere('u.disponible = 1')
                    ->orderBy('u.id')
                    ->setParameter('chaine', '%'. $chaine.'%');
        return $qb->getQuery()->getResult();
    }
}