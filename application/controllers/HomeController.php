<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function index() {
//        $this->load->model('Home_Model', 'model2');
//        $results1 = $this->model2->getUser();
//          
//        $id = $this->session->userdata('id'); 
//
//          $bagOfValues2 = array(
//              'user' => $results1,
//              'followercount'=>  $followercount,
//              'followscount' => $followedcount,
//              'friendcount' => $friendcount
//          );
//          
//          $results3 = $this->model2->getPostbyID();
//         
//          $bagOfValues = array(
//              'postfollowing' => $results3,    
//          );     
//        
        $this->load->model('Home_Model','modelx');
        $location = $this->modelx->getLocation();
        
        $bagofvalues = array(
            'Name' => $location->row()->Name,
            'DisplayPhoto' => $location->row()->DisplayPhoto,
            'Description' => $location->row()->Description,
            'LocationRating' => $location->row()->LocationRating
        );
        
        $this->load->view('Home', $bagofvalues);
        //$this->load->view('Home');
          //$this->load->view('Post', $bagOfValues);

    }
    
//    public function location(){
//        
//        $this->load->model('Home_Model',modelx);
//        $location = $this->modelx->getLocation();
//        
//        $bagofvalues = array(
//            'location' => $location
//        );
//        
//        $this->load->view('Home', $bagofvalues);
//    }
}


