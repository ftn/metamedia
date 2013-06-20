<?php

if (! defined('BASEPATH')) exit('No direct script access allowed');

require 'application/libraries/password.php';

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
        $query = $this->db->get(self::TABLE);
        $result = $query->result();
        return $result[0];
    }
    
    public function getActiveByName($name) {
        $this->db->where('name', $name);
        $this->db->where('status', 1);
        $query = $this->db->get(self::TABLE);
        $result = $query->result();
        return $result[0];
    }
    
    public function save($name, $email, $language, $password) {
        $this->setName($name);
        $this->setEmail($email);
        $this->setLanguage($language);
        $this->setStatus(1);
        $salt = substr(base64_encode(openssl_random_pseudo_bytes(32)), 0, 32);
        
        $this->setPasswordSalt($salt);
        $this->setPasswordHash(password_hash($password, PASSWORD_BCRYPT, array('salt' => $salt.chr(0))));
        
        $this->db->set(get_object_vars($this));
        $this->db->insert(self::TABLE);
    }
    
    public function isValidPassword($email, $password) {
        $this->db->where('email', $email);
        $query = $this->db->get(self::TABLE);
        $user = $query->result();
        $user = $user[0];
        
        $hash = password_hash($password, PASSWORD_BCRYPT, array('salt' => $user->password_salt.chr(0)));
        return $user->password_hash == $hash;
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
