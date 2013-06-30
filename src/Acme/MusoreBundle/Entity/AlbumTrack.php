<?php

namespace Acme\MusoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Acme\MusoreBundle\Entity\AlbumTrackRepository")
 * @ORM\Table(name="albumTrack")
 */
class AlbumTrack{
    /**
     * @ORM\id
     * @ORM\ManyToOne(targetEntity="Album", inversedBy="albumTracks")
     * @ORM\JoinColumn(name="album_id", referencedColumnName="id")
     */
    protected $album;

    /**
     * @ORM\id
     * @ORM\ManyToOne(targetEntity="Song", inversedBy="albumTracks")
     * @ORM\JoinColumn(name="song_id", referencedColumnName="id")
     */
    protected $song;

    /**
     * @ORM\Column(type="integer")
     */
    protected $trackNumber;

    /**
     * Set trackNumber
     *
     * @param integer $trackNumber
     * @return AlbumTrack
     */
    public function setTrackNumber($trackNumber)
    {
        $this->trackNumber = $trackNumber;
    
        return $this;
    }

    /**
     * Get trackNumber
     *
     * @return integer 
     */
    public function getTrackNumber()
    {
        return $this->trackNumber;
    }

    /**
     * Set album
     *
     * @param \Acme\MusoreBundle\Entity\Album $album
     * @return AlbumTrack
     */
    public function setAlbum(\Acme\MusoreBundle\Entity\Album $album = null)
    {
        $this->album = $album;
    
        return $this;
    }

    /**
     * Get album
     *
     * @return \Acme\MusoreBundle\Entity\Album 
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * Set song
     *
     * @param \Acme\MusoreBundle\Entity\Song $song
     * @return AlbumTrack
     */
    public function setSong(\Acme\MusoreBundle\Entity\Song $song = null)
    {
        $this->song = $song;
    
        return $this;
    }

    /**
     * Get song
     *
     * @return \Acme\MusoreBundle\Entity\Song
     */
    public function getSong()
    {
        return $this->song;
    }
}