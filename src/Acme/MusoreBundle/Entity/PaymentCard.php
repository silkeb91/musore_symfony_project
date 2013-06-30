<?php
namespace Acme\MusoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="paymentcard")
 */
class PaymentCard{
    /**
     * @ORM\id
     * @ORM\Column(type="string", length=15)
     */
    protected $cardnumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $cardholderName;

    /**
     * @ORM\Column(type="integer", length=11)
     */
    protected $CCV_code;

    /**
     * @ORM\Column(type="date")
     */
    protected $expireDate;

    /**
     * @ORM\OneToMany(targetEntity="Customer", mappedBy="paymentCard")
     */
    protected $customers;

    public function __construct(){
        $this->customers = new ArrayCollection();
    }

   

    /**
     * Set cardnumber
     *
     * @param string $cardnumber
     * @return Paymentcard
     */
    public function setCardnumber($cardnumber)
    {
        $this->cardnumber = $cardnumber;
    
        return $this;
    }

    /**
     * Get cardnumber
     *
     * @return string 
     */
    public function getCardnumber()
    {
        return $this->cardnumber;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Paymentcard
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set cardholderName
     *
     * @param string $cardholderName
     * @return Paymentcard
     */
    public function setCardholderName($cardholderName)
    {
        $this->cardholderName = $cardholderName;
    
        return $this;
    }

    /**
     * Get cardholderName
     *
     * @return string 
     */
    public function getCardholderName()
    {
        return $this->cardholderName;
    }

    /**
     * Set CCV_code
     *
     * @param integer $cCVCode
     * @return Paymentcard
     */
    public function setCCVCode($cCVCode)
    {
        $this->CCV_code = $cCVCode;
    
        return $this;
    }

    /**
     * Get CCV_code
     *
     * @return integer 
     */
    public function getCCVCode()
    {
        return $this->CCV_code;
    }

    /**
     * Set expireDate
     *
     * @param \DateTime $expireDate
     * @return Paymentcard
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;
    
        return $this;
    }

    /**
     * Get expireDate
     *
     * @return \DateTime 
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Add customers
     *
     * @param \Acme\MusoreBundle\Entity\Customer $customers
     * @return PaymentCard
     */
    public function addCustomer(\Acme\MusoreBundle\Entity\Customer $customers)
    {
        $this->customers[] = $customers;
    
        return $this;
    }

    /**
     * Remove customers
     *
     * @param \Acme\MusoreBundle\Entity\Customer $customers
     */
    public function removeCustomer(\Acme\MusoreBundle\Entity\Customer $customers)
    {
        $this->customers->removeElement($customers);
    }

    /**
     * Get customers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCustomers()
    {
        return $this->customers;
    }
}