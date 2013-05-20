<?php

namespace Metamedia\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MmMediaAxis
 *
 * @ORM\Table(name="mm_media_axis")
 * @ORM\Entity
 */
class MmMediaAxis
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
     * @var \MmMedia
     *
     * @ORM\ManyToOne(targetEntity="MmMedia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="media_id", referencedColumnName="id")
     * })
     */
    private $media;



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
     * @return MmMediaAxis
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
     * @return MmMediaAxis
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
     * Set media
     *
     * @param \Metamedia\WebBundle\Entity\MmMedia $media
     * @return MmMediaAxis
     */
    public function setMedia(\Metamedia\WebBundle\Entity\MmMedia $media = null)
    {
        $this->media = $media;
    
        return $this;
    }

    /**
     * Get media
     *
     * @return \Metamedia\WebBundle\Entity\MmMedia 
     */
    public function getMedia()
    {
        return $this->media;
    }
}