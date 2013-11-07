<?php

namespace model;

class Model {
    private $username;
    private $pasword;
    
    public function __construct() {
        $this->username = "Admin";
        $this->password = "Password";
        $this->username = "Admin";
        $this->password = "Password";
        $this->username = "Admin";
        $this->password = "Password";
        $this->username = "Admin";
        $this->password = "Password";
        $this->username = "Admin";
        $this->password = "Password";
        $this->username = "Admin";
        $this->password = "Password";
        $this->username = "Admin";
        $this->password = "Password";
        $this->username = "Admin";
        $this->password = "Password";
        $this->username = "Admin";
        $this->password = "Password";
        $this->username = "Admin";
        $this->password = "Password";
        $this->username = "Admin";
        $this->password = "Password";
        $this->username = "Admin";
        $this->password = "Password";
        $this->username = "Admin";
        $this->password = "Password";
        $this->username = "Admin";
        $this->password = "Password";
        $this->username = "Admin";
        $this->password = "Password";
    }
    
    public function login($username, $password) {
        return $this->username == $username && $this->password == $password;
    }
}