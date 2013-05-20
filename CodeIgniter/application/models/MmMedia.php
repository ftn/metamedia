<?php

namespace Metamedia\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MmMedia
 *
 * @ORM\Table(name="mm_media")
 * @ORM\Entity
 */
class MmMedia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="bigint", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="excerpt", type="text", nullable=true)
     */
    private $excerpt;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="original_creator", type="string", length=100, nullable=true)
     */
    private $originalCreator;

    /**
     * @var string
     *
     * @ORM\Column(name="original_url", type="string", length=2083, nullable=true)
     */
    private $originalUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="license_name", type="string", length=100, nullable=false)
     */
    private $licenseName;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=2, nullable=false)
     */
    private $language;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var \MmLicense
     *
     * @ORM\ManyToOne(targetEntity="MmLicense")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="license_id", referencedColumnName="id")
     * })
     */
    private $license;

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
     * Set type
     *
     * @param integer $type
     * @return MmMedia
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return MmMedia
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
     * Set excerpt
     *
     * @param string $excerpt
     * @return MmMedia
     */
    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;
    
        return $this;
    }

    /**
     * Get excerpt
     *
     * @return string 
     */
    public function getExcerpt()
    {
        return $this->excerpt;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return MmMedia
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set originalCreator
     *
     * @param string $originalCreator
     * @return MmMedia
     */
    public function setOriginalCreator($originalCreator)
    {
        $this->originalCreator = $originalCreator;
    
        return $this;
    }

    /**
     * Get originalCreator
     *
     * @return string 
     */
    public function getOriginalCreator()
    {
        return $this->originalCreator;
    }

    /**
     * Set originalUrl
     *
     * @param string $originalUrl
     * @return MmMedia
     */
    public function setOriginalUrl($originalUrl)
    {
        $this->originalUrl = $originalUrl;
    
        return $this;
    }

    /**
     * Get originalUrl
     *
     * @return string 
     */
    public function getOriginalUrl()
    {
        return $this->originalUrl;
    }

    /**
     * Set licenseName
     *
     * @param string $licenseName
     * @return MmMedia
     */
    public function setLicenseName($licenseName)
    {
        $this->licenseName = $licenseName;
    
        return $this;
    }

    /**
     * Get licenseName
     *
     * @return string 
     */
    public function getLicenseName()
    {
        return $this->licenseName;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return MmMedia
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    
        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return MmMedia
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

    /**
     * Set license
     *
     * @param \Metamedia\WebBundle\Entity\MmLicense $license
     * @return MmMedia
     */
    public function setLicense(\Metamedia\WebBundle\Entity\MmLicense $license = null)
    {
        $this->license = $license;
    
        return $this;
    }

    /**
     * Get license
     *
     * @return \Metamedia\WebBundle\Entity\MmLicense 
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Set user
     *
     * @param \Metamedia\WebBundle\Entity\MmUser $user
     * @return MmMedia
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