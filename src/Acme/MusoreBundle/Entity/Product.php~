<?php

namespace Acme\MusoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Product{
    /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="float")
     */
    protected $price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $title;

    /**
     * @ORM\Column(type="date")
     */
    protected $release_date;

    /**
     * @ORM\ManyToOne(targetEntity="Artist", inversedBy="products")
     * @ORM\JoinColumn(name="artist_id", referencedColumnName="id")
     */
    protected $artist;

    /**
     * @ORM\ManyToOne(targetEntity="Genre", inversedBy="products")
     * @ORM\JoinColumn(name="genre_id", referencedColumnName="id")
     */
    protected $genre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $coverLink;

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
     * Set price
     *
     * @param float $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Product
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set release_date
     *
     * @param \DateTime $releaseDate
     * @return Product
     */
    public function setReleaseDate($releaseDate)
    {
        $this->release_date = $releaseDate;
    
        return $this;
    }

    /**
     * Get release_date
     *
     * @return \DateTime 
     */
    public function getReleaseDate()
    {
        return $this->release_date;
    }

    /**
     * Set coverLink
     *
     * @param string $coverLink
     * @return Product
     */
    public function setCoverLink($coverLink)
    {
        $this->coverLink = $coverLink;
    
        return $this;
    }

    /**
     * Get coverLink
     *
     * @return string 
     */
    public function getCoverLink()
    {
        return $this->coverLink;
    }

    /**
     * Set artist
     *
     * @param \Acme\MusoreBundle\Entity\Artist $artist
     * @return Product
     */
    public function setArtist(\Acme\MusoreBundle\Entity\Artist $artist = null)
    {
        $this->artist = $artist;
    
        return $this;
    }

    /**
     * Get artist
     *
     * @return \Acme\MusoreBundle\Entity\Artist 
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * Set genre
     *
     * @param \Acme\MusoreBundle\Entity\Genre $genre
     * @return Product
     */
    public function setGenre(\Acme\MusoreBundle\Entity\Genre $genre = null)
    {
        $this->genre = $genre;
    
        return $this;
    }

    /**
     * Get genre
     *
     * @return \Acme\MusoreBundle\Entity\Genre 
     */
    public function getGenre()
    {
        return $this->genre;
    }
}