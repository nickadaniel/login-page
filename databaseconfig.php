<?php

class DataBaseConfig{
    public $servername; 
    public $username;
    public $password;
    public $databasename;

    public function __contruct(){
        $this-> servername = 'localhost';
        $this-> username = 'root';
        $this-> password = '';
        $this-> databasename ='test';
    }
}

// changing the database name 
//user name password matches with it
// inserts user password email 
// 