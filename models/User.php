<?php

class User{
    private $db;
    public function __construct(){
        $this->db = new Database();
    }



    //Registration method
    public function register($data)
    {
        # code...
        $this->db->query('INSERT INTO users (name,email,password,role) 
        VALUE (:name,:email,:password,:role)');
        //Bind parameter
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':email',$data['email']);
        $this->db->bind(':password',$data['password']);
        $this->db->bind(':role',$data['role']);

        if ($this->db->execute()) {
            # code...
            return true;
        }else{
            return false;
        }
    }

    //check if email is available!
    public function check_email($email)
    {
        # code...
        $this->db->query('SELECT email  FROM users WHERE email = :user_email');
        //Bind parameter
        $this->db->bind(':user_email',$email);
        $row = $this->db->single();
        return $row;
    }


    //find user by email
    public function findUserbyEmail($email)
    {
        # code...
        $this->db->query('SELECT *  FROM users WHERE email = :user_email');
        //Bind parameter
        $this->db->bind(':user_email',$email);
        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            # code...
            return $row;
        }else{
            return false;
        }

    }

    public function userLogin($form_mai,$db_password)
    {
        # code...
        $this->db->query('SELECT *  FROM users WHERE email = :user_email AND password = :password');
        //Bind parameter
        $this->db->bind(':user_email',$form_mai);
        $this->db->bind(':password',$db_password);
        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            # code...
            return $row;
        }else{
            return false;
        }
    }
}





?>