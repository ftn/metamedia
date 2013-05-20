<?php

if (! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {
    /*
    //$this->output->enable_profiler(TRUE);
    public function index() {
            $data['title'] = 'HERE title';

            $this->load->view('templates/header', $data);
            $this->load->view('pages/home', $data);
            $this->load->view('templates/footer', $data);
    }
    */

    public function getAxes() {
        if (($_SERVER['REQUEST_METHOD'] == 'GET') && ($_SERVER["CONTENT_TYPE"] == 'application/json')) {
            parse_str(file_get_contents('php://input'),$body);
            $jsonVars = json_decode($body['json'], true);
            
            // TODO: authenticate
            // print_r($jsonVars['user']);
            // print_r($jsonVars['password']);

            $this->load->model('axis_model');
            print_r(json_encode($this->axis_model->get_all()));
        }
    }

    public function getLicenses() {
        if (($_SERVER['REQUEST_METHOD'] == 'GET') && ($_SERVER["CONTENT_TYPE"] == 'application/json')) {
            parse_str(file_get_contents('php://input'),$body);
            $jsonVars = json_decode($body['json'], true);
            
            // TODO: authenticate
            // print_r($jsonVars['user']);
            // print_r($jsonVars['password']);

            $this->load->model('license_model');
            print_r(json_encode($this->license_model->get_all()));
        }
    }

    public function putMedia() {
        if (($_SERVER['REQUEST_METHOD'] == 'PUT') && ($_SERVER["CONTENT_TYPE"] == 'application/json')) {
            parse_str(file_get_contents('php://input'),$body);
            $jsonVars = json_decode($body['json'], true);
            
            // TODO: authenticate and set user_id
            // print_r($jsonVars['user']);
            // print_r($jsonVars['password']);
            
            $this->load->model('media_model');
            $this->load->model('license_model');
            // TODO: set user_id
            
            $license = $this->license_model->getById($jsonVars['license-id']);
            
            $media = new Media_model(
                        $jsonVars['type'], 
                        $jsonVars['title'], 
                        $jsonVars['excerpt'], 
                        $jsonVars['content'], 
                        $jsonVars['original-creator'], 
                        $jsonVars['original-url'], 
                        $license->id, 
                        $license->name, 
                        $jsonVars['language'], 
                        1, 
                        Media_model::STATUS_ACTIVE
                    );
            $media->save();
        }
    }
}
