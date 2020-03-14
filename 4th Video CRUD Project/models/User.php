<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class User extends CI_Model{ 
    function __construct() { 
        // Set table name 
        $this->table = 'users'; 
    }
    function validateLoginUser($formArray) {
        $this->db->where('email',$formArray['email']);
        $this->db->where('password',md5($formArray['password']));
        $this->db->where('status',1);
        return $user = $this->db->get('users')->row_array(); 
    }
    function getUserById($userId){
        $this->db->where('id',$userId);
        return $user = $this->db->get('users')->row_array();
    }

}