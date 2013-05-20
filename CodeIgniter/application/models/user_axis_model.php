<?php

if (! defined('BASEPATH')) exit('No direct script access allowed');

class User_axis_model extends CI_Model {
    const TABLE = 'mm_user_axis_model';
    
    private $id;
    private $axisPosition;
    private $axis;
    private $user;

    public function __construct() {
        $this->load->database();
    }

    public function setId($id) {
        $this->id = $id;

        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function setAxisPosition($axisPosition) {
        $this->axisPosition = $axisPosition;
    
        return $this;
    }

    public function getAxisPosition() {
        return $this->axisPosition;
    }

    public function setAxis($axis) {
        $this->axis = $axis;
    
        return $this;
    }

    public function getAxis() {
        return $this->axis;
    }

    public function setUser($user) {
        $this->user = $user;
    
        return $this;
    }

    public function getUser() {
        return $this->user;
    }
}
