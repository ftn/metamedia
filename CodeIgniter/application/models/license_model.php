<?php

if (! defined('BASEPATH')) exit('No direct script access allowed');

class License_model extends CI_Model {
    const TABLE = 'mm_license';
    
    private $id;
    private $name;
    private $url;
    private $allows_commercial;

    public function __construct() {
        $this->load->database();
    }
    
    public function get_all() {
        $query = $this->db->get($this::TABLE);
        return $query->result();
    }
    
    public function getById($licenseId) {
        $this->db->where('id', $licenseId);
        $query = $this->db->get($this::TABLE);
        $results = $query->result();
        return $results[0];
    }

    public function setId($id) {
        $this->id = $id;

        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function setName($name) {
        $this->name = $name;
    
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function setUrl($url) {
        $this->url = $url;
    
        return $this;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setAllowsCommercial($allowsCommercial) {
        $this->allows_commercial = $allowsCommercial;
    
        return $this;
    }

    public function getAllowsCommercial() {
        return $this->allows_commercial;
    }
}
