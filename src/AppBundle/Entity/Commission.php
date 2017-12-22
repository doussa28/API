<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commission
 *
 * @ORM\Table(name="commission")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommissionRepository")
 */
class Commission
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="cashback", type="decimal", precision=10, scale=2)
     */
    private $cashback;

	
	 /**
     * @ORM\ManyToOne(targetEntity="Marchant")
     * @ORM\JoinColumn(nullable=false)
     */

     private $marchant;

	
	/**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(nullable=false)
     */

     private $user;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Commission
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set cashback
     *
     * @param string $cashback
     *
     * @return Commission
     */
    public function setCashback($cashback)
    {
        $this->cashback = $cashback;

        return $this;
    }

    /**
     * Get cashback
     *
     * @return string
     */
    public function getCashback()
    {
        return $this->cashback;
    }
	
	
	 /**

     * @return mixed

     */

    public function getMerchant()

    {

        return $this->marchant;

    }



    /**

     * @param mixed $marchant

     */

    public function setMerchant($marchant)

    {

        $this->marchant = $marchant;

    }


	/**

     * @return mixed

     */

    public function getUser()

    {

        return $this->user;

    }



    /**

     * @param mixed $user

     */

    public function setUser($user)

    {

        $this->user = $user;

    }


}

