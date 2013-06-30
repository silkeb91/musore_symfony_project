<?php

namespace Acme\MusoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Acme\MusoreBundle\Entity\AlbumRepository")
 * @ORM\Table(name="album")
 */
class Album{
    /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     **/
    private $product;

    /**
     * @ORM\OneToMany(targetEntity="AlbumTrack", mappedBy="album")
     */
    protected $albumTracks;

    public function __construct(){
        $this->albumTracks = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set product
     *
     * @param \Acme\MusoreBundle\Entity\Product $product
     * @return Album
     */
    public function setProduct(\Acme\MusoreBundle\Entity\Product $product = null)
    {
        $this->product = $product;
    
        return $this;
    }

    /**
     * Get product
     *
     * @return \Acme\MusoreBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Add albumTracks
     *
     * @param \Acme\MusoreBundle\Entity\AlbumTrack $albumTracks
     * @return Album
     */
    public function addAlbumTrack(\Acme\MusoreBundle\Entity\AlbumTrack $albumTracks)
    {
        $this->albumTracks[] = $albumTracks;
    
        return $this;
    }

    /**
     * Remove albumTracks
     *
     * @param \Acme\MusoreBundle\Entity\AlbumTrack $albumTracks
     */
    public function removeAlbumTrack(\Acme\MusoreBundle\Entity\AlbumTrack $albumTracks)
    {
        $this->albumTracks->removeElement($albumTracks);
    }

    /**
     * Get albumTracks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAlbumTracks()
    {
        return $this->albumTracks;
    }
}