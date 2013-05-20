<?php

if (! defined('BASEPATH')) exit('No direct script access allowed');

class Axis_model extends CI_Model {
    const TABLE = 'mm_axis';
    
    private $id;
    private $name;
    private $left_term;
    private $right_term;
    private $status;


    public function __construct() {
        $this->load->database();
    }
    
    public function get_all() {
        $this->db->where('status', '1');
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

	public function setLeftTerm($leftTerm) {
		$this->left_term = $leftTerm;
	
		return $this;
	}

	public function getLeftTerm() {
		return $this->left_term;
	}

	public function setRightTerm($rightTerm) {
		$this->rightTerm = $right_term;
	
		return $this;
	}

	public function getRightTerm() {
		return $this->right_term;
	}

	public function setStatus($status) {
		$this->status = $status;
	
		return $this;
	}

	public function getStatus() {
		return $this->status;
	}


}
