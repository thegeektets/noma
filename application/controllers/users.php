<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
    $this->load->model('users_model');
       
    }


	public function register()
	{

	 $this->load->helper(array('form', 'url'));
     $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username ', 'required'); 
            $this->form_validation->set_rules('email', 'Email ', 'required|valid_email'); 
            $this->form_validation->set_rules('password', 'Password  ', 'required'); 
                       
    if ($this->form_validation->run() == FALSE){
 
    	echo 0;
    }
    else {
     $data['success']= ("Registration success") ;
     $this->users_model->registeruser();
        echo 1;
       
    }
  }

  public function login(){

        $this->load->library('session');
       
        if($this->session->userdata('logged_in') == "TRUE") {
            
           echo 1;
     
        }
        else{
          $this->load->helper(array('form', 'url'));
          $this->load->library('form_validation');
          $this->form_validation->set_rules('user', 'Username ', 'required'); 
          $this->form_validation->set_rules('pass', 'Password  ', 'required'); 
                          
        if ($this->form_validation->run() == FALSE){
     
                echo 3;
        }
        else {
           $passw = $this->users_model->logindetails();

           if(md5($this->input->post("pass")) == $passw){
              $this->load->library('session');
              
              $newdata = array(
                    'username'  => $this->input->post("user"),
                    'logged_in' => TRUE
                   );
            $this->session->set_userdata($newdata);
            $users = $this->session->all_userdata();
                     echo 1;
            }
        
            else{
                
                  echo 0;
                   echo 'f'.$passw;
                
              }
            
          }
        }   
      }

    public function dashboard(){

        $this->load->library('session');

           if($this->session->userdata('logged_in') == "TRUE") {
            
            
             }
    }
	
}

