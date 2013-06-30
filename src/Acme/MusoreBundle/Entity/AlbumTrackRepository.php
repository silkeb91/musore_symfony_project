<?php

namespace Acme\MusoreBundle\Entity;

use Doctrine\ORM\EntityRepository;

class AlbumTrackRepository extends EntityRepository{
    public function findAlbumsAndAlbumTracks($album_id){
        return $this->getEntityManager()
            -> createQuery('SELECT a FROM AcmeMusoreBundle:AlbumTrack a
                            JOIN a.album album
                            JOIN a.single single
                            WHERE album.id = :album_id')
            -> setParameter('album_id', $album_id)
            -> getResult();
    }
}