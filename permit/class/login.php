<?php

class login extends database{

    public function __construct(){

        parent ::__construct();
    }

    public function check_user($username, $password){
 
        $sql = "SELECT * FROM user_login WHERE username = '$username' AND password = '$password'";
        $query = $this->mysqli->query($sql);
 
        if($query->num_rows > 0){
            $row = $query->fetch_array();
            return $row['id'];
        }
        else{
            return False;
        }
    }

    public function check_admin($username, $password){
 
        $sql = "SELECT * FROM admin_login WHERE username = '$username' AND password = '$password'";
        $query = $this->mysqli->query($sql);
 
        if($query->num_rows > 0){
            $row = $query->fetch_array();
            return $row['id'];
        }
        else{
            return false;
        }
    }

    public function escape_string($value){
 
        return $this->mysqli->real_escape_string($value);
    }

}