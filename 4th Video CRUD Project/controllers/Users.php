<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Users extends CI_Controller { 
     
    function __construct() { 
        parent::__construct(); 
         
        // Load form validation ibrary & user model 
        $this->load->library('form_validation'); 
        $this->load->model('user'); 
         
        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
    } 
     
    public function index(){ 
        if($this->isUserLoggedIn){ 
            redirect('users/account'); 
        }else{ 
            redirect('users/login'); 
        } 
    } 
 
    public function account(){ 
        $data = array(); 
        if($this->isUserLoggedIn){ 
/*                $this->load->model('Product_model');
                $products = $this->Product_model->all();
                $data = array();
                $data['products'] = $products;
*/             
            $userId = $this->session->userdata('userId');
            $loggedInUser = $this->user->getUserById($userId);

            $data['loggedInUser'] =  $loggedInUser;
            log_message("error", "Logged in User in Product ".$loggedInUser['first_name']);
             
            $this->load->view('users/account', $data); 
           
        }else{ 
            redirect('users/login'); 
        } 
    } 
 
    public function login(){ 
        $data = array(); 
      
        if($this->isUserLoggedIn){ 
          redirect('users/account');  
        }else{

        if($this->session->userdata('success_msg')){ 
            $data['success_msg'] = $this->session->userdata('success_msg'); 
            $this->session->unset_userdata('success_msg'); 
        } 
        if($this->session->userdata('error_msg')){ 
            $data['error_msg'] = $this->session->userdata('error_msg'); 
            $this->session->unset_userdata('error_msg'); 
        } 
         
        if($this->input->post('loginSubmit')){ 
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
            $this->form_validation->set_rules('password', 'password', 'required'); 
             
            if($this->form_validation->run() == true){ 
                
                $formArray = array();
                $formArray['email'] = $this->input->post('email');  
                $formArray['password'] = $this->input->post('password');
                $formArray['status'] = $this->input->post('status');

                $checkLogin = $this->user->validateLoginUser($formArray); 

                if($checkLogin){ 
                    $this->session->set_userdata('isUserLoggedIn', TRUE); 
                    $this->session->set_userdata('userId', $checkLogin['id']); 
                    redirect('users/account/'); 
                }else{ 
                    $data['error_msg'] = 'Wrong email or password, please try again.'; 
                } 
            }else{ 
                $data['error_msg'] = 'Please fill all the mandatory fields.'; 
            } 
        }          
        $this->load->view('users/login', $data); 
    }
    }
    public function logout(){ 
        $this->session->unset_userdata('isUserLoggedIn'); 
        $this->session->unset_userdata('userId'); 
        $this->session->sess_destroy(); 
        redirect('users/login/'); 
    }   
}