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
            if (get_magic_quotes_gpc()) {
                $body['json'] = stripslashes($body['json']);
            }
            $jsonVars = json_decode($body['json'], true);
            
            $this->load->model('user_model');
            
            if ($this->user_model->isValidPassword($jsonVars['email'], $jsonVars['password'])) {
                $this->load->model('axis_model');
                print_r(json_encode($this->axis_model->get_all()));
            }
            
            
        }
    }

    public function getLicenses() {
        if (($_SERVER['REQUEST_METHOD'] == 'GET') && ($_SERVER["CONTENT_TYPE"] == 'application/json')) {
            parse_str(file_get_contents('php://input'),$body);
            if (get_magic_quotes_gpc()) {
                $body['json'] = stripslashes($body['json']);
            }
            $jsonVars = json_decode($body['json'], true);
            
            $this->load->model('user_model');
            
            if ($this->user_model->isValidPassword($jsonVars['email'], $jsonVars['password'])) {
                $this->load->model('license_model');
                print_r(json_encode($this->license_model->get_all()));
            }
        }
    }

    public function putMedia() {
        if (($_SERVER['REQUEST_METHOD'] == 'PUT') && ($_SERVER["CONTENT_TYPE"] == 'application/json')) {
            parse_str(file_get_contents('php://input'),$body);
            if (get_magic_quotes_gpc()) {
            	$body['json'] = stripslashes($body['json']);
            }
            $jsonVars = json_decode($body['json'], true);
            
            $this->load->model('user_model');
            
            if ($this->user_model->isValidPassword($jsonVars['email'], $jsonVars['password'])) {
                $this->load->model('media_model');
                $this->load->model('license_model');

                $license = $this->license_model->getById($jsonVars['license-id']);
                
                $user = $this->user_model->getActiveByName($jsonVars['name']);

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
                            $user->id, 
                            Media_model::STATUS_ACTIVE
                        );
                $media->save();
            }
        }
    }
    
    public function putUser() {
        if (($_SERVER['REQUEST_METHOD'] == 'PUT') && ($_SERVER["CONTENT_TYPE"] == 'application/json')) {
            parse_str(file_get_contents('php://input'),$body);
            if (get_magic_quotes_gpc()) {
                $body['json'] = stripslashes($body['json']);
            }
            $jsonVars = json_decode($body['json'], true);
            
            $this->load->model('user_model');
            
            $this->user_model->save($jsonVars['name'], $jsonVars['email'], $jsonVars['language'], $jsonVars['password']); 
        }
    }
}
