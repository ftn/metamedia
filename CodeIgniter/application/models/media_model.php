<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Media_model extends CI_Model {
    const TABLE = 'mm_media';
    
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 1;

    private $id;
    private $type;
    private $title;
    private $excerpt;
    private $content;
    private $original_creator;
    private $original_url;
    private $license_id;
    private $license_name;
    private $language;
    private $user_id;
    private $status;
    private $creation_date;

    public function __construct($type=NULL, $title=NULL, $excerpt=NULL, $content=NULL, $originalCreator=NULL, $originalUrl=NULL, $license_id=NULL, $license_name=NULL, $language=NULL, $user_id=NULL, $status=NULL) {
        $this->load->database();
        
        $this->setType($type);
        $this->setTitle($title);
        $this->setExcerpt($excerpt);
        $this->setContent($content);
        $this->setOriginalCreator($originalCreator);
        $this->setOriginalUrl($originalUrl);
        $this->setLicenseId($license_id);
        $this->setLicenseName($license_name);
        $this->setLanguage($language);
        $this->setUserId($user_id);
        $this->setStatus($status);
    }

    public function save() {
        print_r($this);
        if ($this->id == NULL) {
            $this->db->set(get_object_vars($this));
            $this->db->insert($this::TABLE);
        } else {
            $this->db->where('id', $this->id);
            $this->db->set(get_object_vars($this));
            $this->db->update($this::TABLE);
        }
        return $this->db->affected_rows();
    }

    public function setId($id) {
        $this->id = $id;

        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    public function getType() {
        return $this->type;
    }

    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setExcerpt($excerpt) {
        $this->excerpt = $excerpt;

        return $this;
    }

    public function getExcerpt() {
        return $this->excerpt;
    }

    public function setContent($content) {
        $this->content = $content;

        return $this;
    }

    public function getContent() {
        return $this->content;
    }

    public function setOriginalCreator($originalCreator) {
        $this->original_creator = $originalCreator;

        return $this;
    }

    public function getOriginalCreator() {
        return $this->original_creator;
    }

    public function setOriginalUrl($originalUrl) {
        $this->original_url = $originalUrl;

        return $this;
    }

    public function getOriginalUrl() {
        return $this->original_url;
    }

    public function setLicenseName($licenseName) {
        $this->license_name = $licenseName;

        return $this;
    }

    public function getLicenseName() {
        return $this->license_name;
    }

    public function setLanguage($language) {
        $this->language = $language;

        return $this;
    }

    public function getLanguage() {
        return $this->language;
    }

    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setLicenseId($licenseId) {
        $this->license_id = $licenseId;

        return $this;
    }

    public function getLicenseId() {
        return $this->license_id;
    }

    public function setUserId($user_id) {
        $this->user_id = $user_id;

        return $this;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function setCreationDate($creation_date) {
        $this->creation_date = $creation_date;

        return $this;
    }

    public function getCreationDate() {
        return $this->creation_date;
    }

}
