<?php

namespace Acme\MusoreBundle\Entity;

use Doctrine\ORM\EntityRepository;

class AlbumRepository extends EntityRepository{
    public function findAlbumsOrderedByReleaseDate($limit){
        return $this->getEntityManager()
            -> createQuery('SELECT a FROM AcmeMusoreBundle:Album a
                            JOIN a.product p
                            ORDER BY p.release_date DESC')
            -> getResult();
    }

    public function findAlbumByIdWithAlbumTracks($id){
        $query =  $this->getEntityManager()
                        -> createQuery('SELECT a FROM AcmeMusoreBundle:Album a
                                        JOIN a.product p
                                        JOIN p.artist ar
                                        JOIN a.albumTracks tracks
                                        WHERE a.id = :id')
                        -> setParameter('id', $id);
        try{
            return $query -> getSingleResult();

        }catch(\Doctrine\Orm\NoResultException $e){
            return null;
        }
    }

    public function findAlbumById($album_id){
        $query =  $this->getEntityManager()
            -> createQuery('SELECT a FROM AcmeMusoreBundle:Album a
                                        JOIN a.product p
                                        JOIN p.artist ar
                                        JOIN a.albumTracks tracks
                                        WHERE a.id = :album_id')
            -> setParameter('album_id', $album_id);
        try{
            return $query -> getSingleResult();

        }catch(\Doctrine\Orm\NoResultException $e){
            return null;
        }
    }

    public function findAlbum($artist, $album){
        $query =  $this->getEntityManager()
            -> createQuery('SELECT a FROM AcmeMusoreBundle:Album a
                                        JOIN a.product p
                                        JOIN p.artist ar
                                        JOIN a.albumTracks tracks
                                        WHERE ar.name = :artist AND p.title = :album')
            -> setParameters(array('artist' => $artist, 'album' => $album));
        try{
            return $query -> getSingleResult();

        }catch(\Doctrine\Orm\NoResultException $e){
            return null;
        }
    }

    public function findAlbumsByArtist($artistId){
        return $this->getEntityManager()
            -> createQuery('SELECT a FROM AcmeMusoreBundle:Album a
                            JOIN a.product p
                            JOIN p.artist artist
                            WHERE artist.id = :artistId
                            ORDER BY p.release_date DESC')
            -> setParameter('artistId', $artistId)
            -> getResult();
    }

    public function findAlbumsOfGenre($genre_id){
        return $this->getEntityManager()
            -> createQuery('SELECT a FROM AcmeMusoreBundle:Album a
                            JOIN a.product p
                            JOIN p.artist artist
                            JOIN p.genre g
                            WHERE g.id = :genre_id
                            ORDER BY p.release_date DESC')
            -> setParameter('genre_id', $genre_id)
            -> getResult();
    }
}