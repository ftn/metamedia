<?php

if (! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
    const TABLE = 'mm_user';
    
    private $id;
    private $name;
    private $password_salt;
    private $password_hash;
    private $email;
    private $language;
    private $status;

    public function __construct() {
        $this->load->database();
    }
    
    public function getActiveById($userId) {
        $this->db->where('id', $userId);
        $this->db->where('status', 1);
        $query = $this->db->get($this::TABLE);
        return $query->result();
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

    public function setPasswordSalt($passwordSalt) {
        $this->password_salt = $passwordSalt;
    
        return $this;
    }

    public function getPasswordSalt() {
        return $this->password_salt;
    }

    public function setPasswordHash($passwordHash) {
        $this->password_hash = $passwordHash;
    
        return $this;
    }

    public function getPasswordHash() {
        return $this->password_hash;
    }

    public function setEmail($email) {
        $this->email = $email;
    
        return $this;
    }

    public function getEmail() {
        return $this->email;
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
}
