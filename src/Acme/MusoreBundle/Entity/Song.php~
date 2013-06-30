<?php

namespace Acme\MusoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Acme\MusoreBundle\Entity\SongRepository")
 * @ORM\Table(name="song")
 *
 */
class Song{
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
     * @ORM\Column(type="time")
     */
    private $length;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $previewLink;

    /**
     * @ORM\OneToMany(targetEntity="AlbumTrack", mappedBy="song")
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
     * Set length
     *
     * @param \DateTime $length
     * @return Song
     */
    public function setLength($length)
    {
        $this->length = $length;
    
        return $this;
    }

    /**
     * Get length
     *
     * @return \DateTime 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set previewLink
     *
     * @param string $previewLink
     * @return Song
     */
    public function setPreviewLink($previewLink)
    {
        $this->previewLink = $previewLink;
    
        return $this;
    }

    /**
     * Get previewLink
     *
     * @return string 
     */
    public function getPreviewLink()
    {
        return $this->previewLink;
    }

    /**
     * Set product
     *
     * @param \Acme\MusoreBundle\Entity\Product $product
     * @return Song
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
     * @return Song
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