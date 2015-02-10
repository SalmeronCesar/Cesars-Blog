<?php
//Here no other files can access this database so instead of being public its private
class Database {
    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;
    
    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
    //Here we are opening the connection
    public function openConnection(){
        
    }
    //Here we are closing the connection
    public function closeConnection(){
        
    }
    
    public function query($string) {
        
    }
}

