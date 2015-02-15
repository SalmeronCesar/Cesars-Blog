<?php
//Here no other files can access this database so instead of being public its private
class Database {
    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;
    public $error;
    
    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        
        $this->connection = new mysqli($host, $username, $password);
        
if ($this->connection->connect_error) {
    die("<p>Error: . $connection->connect_error" . "</p>");
}

$exists = $this->connection->select_db($database);

if (!$exists) {
    $query = $this->connection->query("CREATE DATABASE $database");

    if ($query) {
        echo "<p>Successfully created database;" . $database . "</p>";
    }
} else {
    echo "<p>Database already exists.</p>";
}
    }
    //Here we are opening the connection
    public function openConnection(){
        $this->connection = mysqli($this->host, $this->password, $this->database);
        
        if ($this->connection->connect_error) {
            die("<p>Error: . $this->connection->connect_error" . "</p>");
        }
    }

    //Here we are closing the connection and also the if is checking if the function is set or not
    public function closeConnection(){
        if(isset($this->connection)) {
            $this->connection->close();
        }
    }
    
    public function query($string) {
        $this->openConnection();
        
        $query = $this->connection->query($string);
        //Here we are asking a question if this connection has a error and currently it does not.
        if(!query) {
           $this->error = $this->connection->error;
        }
        
        $this->closeConnection();
        
        return $query;
    }
}

