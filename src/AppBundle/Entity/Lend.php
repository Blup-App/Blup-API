<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource
 * @ORM\Entity
 * Lend
 *
 * @ORM\Table(name="lend")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LendRepository")
 */
class Lend
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
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="return_date", type="date")
     */
    private $returnDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lend_date", type="date")
     */
    private $lendDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reminder", type="date")
     */
    private $reminder;

    /**
     * @var string
     *
     * @ORM\Column(name="adressee", type="string", length=255)
     */
    private $adressee;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=255)
     */
    private $owner;


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
     * Set token
     *
     * @param string $token
     *
     * @return lend
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set returnDate
     *
     * @param \DateTime $returnDate
     *
     * @return lend
     */
    public function setReturnDate($returnDate)
    {
        $this->returnDate = $returnDate;

        return $this;
    }

    /**
     * Get returnDate
     *
     * @return \DateTime
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * Set lendDate
     *
     * @param \DateTime $lendDate
     *
     * @return lend
     */
    public function setLendDate($lendDate)
    {
        $this->lendDate = $lendDate;

        return $this;
    }

    /**
     * Get lendDate
     *
     * @return \DateTime
     */
    public function getLendDate()
    {
        return $this->lendDate;
    }

    /**
     * Set reminder
     *
     * @param \DateTime $reminder
     *
     * @return lend
     */
    public function setReminder($reminder)
    {
        $this->reminder = $reminder;

        return $this;
    }

    /**
     * Get reminder
     *
     * @return \DateTime
     */
    public function getReminder()
    {
        return $this->reminder;
    }

    /**
     * Set adressee
     *
     * @param string $adressee
     *
     * @return lend
     */
    public function setAdressee($adressee)
    {
        $this->adressee = $adressee;

        return $this;
    }

    /**
     * Get adressee
     *
     * @return string
     */
    public function getAdressee()
    {
        return $this->adressee;
    }

    /**
     * Set owner
     *
     * @param string $owner
     *
     * @return lend
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }
}
