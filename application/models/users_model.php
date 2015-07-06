<?php
class users_model extends CI_Model {
    private $username;
 
 public function __construct(){
    $this->load->database();     }

   public function registeruser() {
        $username = $this->input->post("username");
        $password = md5($this->input->post("password"));
        $email = ($this->input->post("email"));
    
            $sql = "INSERT INTO user (username,email,password) " .
            "VALUES (" . $this->db->escape($username) . ",".$this->db->escape($email) .",".$this->db->escape($password) .")";
            $this->db->query($sql);

           
    }
   
    public function logindetails() {
        $username = $this->input->post("user");
        $query = $this->db->query("select * from user where username = '".$username ."'");
  
            return $query->result_array();
            
    }

    public function count_words(){
       $ch = curl_init();
             $url = "https://api.mongolab.com/api/1/databases/sheng/collections/dictionary?apiKey=Iwy7zOOBBd6lUzN5jBhLNhv68Wv8UfUl";
             
    curl_setopt ($ch, CURLOPT_URL, $url);
    
    curl_setopt ($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    $data = curl_exec($ch);
   
    if (curl_errno($ch)) {
    echo curl_error($ch);
    echo "\n<br />";
      $data = '';
    } else {
     curl_close($ch);
    }
    if (!is_string($data) || !strlen($data)) {
    echo "Failed to get contents.";
    $data = '';
    }
  
   
    
        return (count(json_decode($data,true))) ;
    }


    public function count_contributions(){
         $ch = curl_init();
             $url = "https://api.mongolab.com/api/1/databases/sheng/collections/queries?apiKey=Iwy7zOOBBd6lUzN5jBhLNhv68Wv8UfUl";
             
    curl_setopt ($ch, CURLOPT_URL, $url);
    
    curl_setopt ($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    $data = curl_exec($ch);
   
    if (curl_errno($ch)) {
    echo curl_error($ch);
    echo "\n<br />";
      $data = '';
    } else {
     curl_close($ch);
    }
    if (!is_string($data) || !strlen($data)) {
    echo "Failed to get contents.";
    $data = '';
    }
  
   
    
        return (count(json_decode($data,true))) ;
    }

    public function count_users(){
        $query = $this->db->query(" SELECT COUNT(*) AS 'all' from user");
        foreach ($query->result() as $row)
            {
            return $row->all;
            }
    }


    public function dictionary() {
            
             $ch = curl_init();
             $url = "https://api.mongolab.com/api/1/databases/sheng/collections/dictionary?apiKey=Iwy7zOOBBd6lUzN5jBhLNhv68Wv8UfUl";
             
    curl_setopt ($ch, CURLOPT_URL, $url);
    
    curl_setopt ($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    $data = curl_exec($ch);
   
    if (curl_errno($ch)) {
    echo curl_error($ch);
    echo "\n<br />";
      $data = '';
    } else {
     curl_close($ch);
    }
    if (!is_string($data) || !strlen($data)) {
    echo "Failed to get contents.";
    $data = '';
    }
  
   
    
        return (json_decode($data,true)) ;
    }

    public function contributions() {
            
             $ch = curl_init();
             $url = "https://api.mongolab.com/api/1/databases/sheng/collections/queries?apiKey=Iwy7zOOBBd6lUzN5jBhLNhv68Wv8UfUl";
             
    curl_setopt ($ch, CURLOPT_URL, $url);
    
    curl_setopt ($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    $data = curl_exec($ch);
   
    if (curl_errno($ch)) {
    echo curl_error($ch);
    echo "\n<br />";
      $data = '';
    } else {
     curl_close($ch);
    }
    if (!is_string($data) || !strlen($data)) {
    echo "Failed to get contents.";
    $data = '';
    }
  
   
    
        return (json_decode($data,true)) ;
    }


    
}