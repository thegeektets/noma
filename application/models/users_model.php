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
                foreach ($query->result() as $row)
            {
            return $row->password;
            }
    }
    
    
}