<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Home_Model extends CI_Model {
       
    public function getLocation() {
        $this->db->select('*');
        $this->db->from('Location'); 
        return $this->db->get();
    } 
}
?>

