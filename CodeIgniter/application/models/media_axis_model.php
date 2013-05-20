<?php

if (! defined('BASEPATH')) exit('No direct script access allowed');

class Media_axis_model extends CI_Model {
    const TABLE = 'mm_media_axis_model';
    
    private $id;
    private $axis_position;
    private $axis;
    private $media;

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
        $this->axis_position = $axisPosition;
    
        return $this;
    }

    public function getAxisPosition() {
        return $this->axis_position;
    }

    public function setAxis($axis = null) {
        $this->axis = $axis;
    
        return $this;
    }

    public function getAxis() {
        return $this->axis;
    }

    public function setMedia($media) {
        $this->media = $media;
    
        return $this;
    }

    public function getMedia() {
        return $this->media;
    }
}
