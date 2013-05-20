<?php

namespace Metamedia\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MmAxis
 *
 * @ORM\Table(name="mm_axis")
 * @ORM\Entity
 */
class MmAxis
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="left_term", type="string", length=100, nullable=false)
     */
    private $leftTerm;

    /**
     * @var string
     *
     * @ORM\Column(name="right_term", type="string", length=100, nullable=false)
     */
    private $rightTerm;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;



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
     * Set name
     *
     * @param string $name
     * @return MmAxis
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set leftTerm
     *
     * @param string $leftTerm
     * @return MmAxis
     */
    public function setLeftTerm($leftTerm)
    {
        $this->leftTerm = $leftTerm;
    
        return $this;
    }

    /**
     * Get leftTerm
     *
     * @return string 
     */
    public function getLeftTerm()
    {
        return $this->leftTerm;
    }

    /**
     * Set rightTerm
     *
     * @param string $rightTerm
     * @return MmAxis
     */
    public function setRightTerm($rightTerm)
    {
        $this->rightTerm = $rightTerm;
    
        return $this;
    }

    /**
     * Get rightTerm
     *
     * @return string 
     */
    public function getRightTerm()
    {
        return $this->rightTerm;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return MmAxis
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }
}