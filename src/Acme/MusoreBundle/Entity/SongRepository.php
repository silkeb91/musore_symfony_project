<?php

namespace Acme\MusoreBundle\Entity;

use Doctrine\ORM\EntityRepository;

class SongRepository extends EntityRepository{
    public function findSingle($id){
        $query =  $this->getEntityManager()
            -> createQuery('SELECT s FROM AcmeMusoreBundle:Song s
                            JOIN s.product p
                            JOIN p.artist a
                            WHERE s.id = :id')
            -> setParameter('id', $id);

        try{
            return $query -> getSingleResult();

        }catch(\Doctrine\Orm\NoResultException $e){
            return null;
        }

    }

    public function findSongsOfGenre($genre_id, $limit){
        $query = $this->getEntityManager()
            -> createQuery('SELECT s FROM AcmeMusoreBundle:Song s
                            JOIN s.product p
                            JOIN p.artist artist
                            JOIN p.genre g
                            WHERE g.id = :genre_id
                            ORDER BY p.release_date DESC')
            -> setParameter('genre_id', $genre_id);
        return $query -> setMaxResults($limit)
                ->getResult();
    }
}