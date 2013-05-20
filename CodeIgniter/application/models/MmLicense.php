<?php

namespace Metamedia\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MmLicense
 *
 * @ORM\Table(name="mm_license")
 * @ORM\Entity
 */
class MmLicense
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
     * @ORM\Column(name="url", type="string", length=2083, nullable=false)
     */
    private $url;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allows_commercial", type="boolean", nullable=false)
     */
    private $allowsCommercial;



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
     * @return MmLicense
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
     * Set url
     *
     * @param string $url
     * @return MmLicense
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set allowsCommercial
     *
     * @param boolean $allowsCommercial
     * @return MmLicense
     */
    public function setAllowsCommercial($allowsCommercial)
    {
        $this->allowsCommercial = $allowsCommercial;
    
        return $this;
    }

    /**
     * Get allowsCommercial
     *
     * @return boolean 
     */
    public function getAllowsCommercial()
    {
        return $this->allowsCommercial;
    }
}