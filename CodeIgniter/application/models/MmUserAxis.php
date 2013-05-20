<?php

namespace Metamedia\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MmUserAxis
 *
 * @ORM\Table(name="mm_user_axis")
 * @ORM\Entity
 */
class MmUserAxis
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="axis_position", type="smallint", nullable=false)
     */
    private $axisPosition;

    /**
     * @var \MmAxis
     *
     * @ORM\ManyToOne(targetEntity="MmAxis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="axis_id", referencedColumnName="id")
     * })
     */
    private $axis;

    /**
     * @var \MmUser
     *
     * @ORM\ManyToOne(targetEntity="MmUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



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
     * Set axisPosition
     *
     * @param integer $axisPosition
     * @return MmUserAxis
     */
    public function setAxisPosition($axisPosition)
    {
        $this->axisPosition = $axisPosition;
    
        return $this;
    }

    /**
     * Get axisPosition
     *
     * @return integer 
     */
    public function getAxisPosition()
    {
        return $this->axisPosition;
    }

    /**
     * Set axis
     *
     * @param \Metamedia\WebBundle\Entity\MmAxis $axis
     * @return MmUserAxis
     */
    public function setAxis(\Metamedia\WebBundle\Entity\MmAxis $axis = null)
    {
        $this->axis = $axis;
    
        return $this;
    }

    /**
     * Get axis
     *
     * @return \Metamedia\WebBundle\Entity\MmAxis 
     */
    public function getAxis()
    {
        return $this->axis;
    }

    /**
     * Set user
     *
     * @param \Metamedia\WebBundle\Entity\MmUser $user
     * @return MmUserAxis
     */
    public function setUser(\Metamedia\WebBundle\Entity\MmUser $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Metamedia\WebBundle\Entity\MmUser 
     */
    public function getUser()
    {
        return $this->user;
    }
}