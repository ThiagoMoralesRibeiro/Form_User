<?php
class DBConnection {
    private $host ="";
    private $user ="";
    private $passwd = "";
    private $dbName = "";
    private $connection="";
    
    
    function __construct() {
        $this->setHost("localhost");
        $this->setUser("root");
        $this->setPasswd("12345");
        $this->setDbName("ldi4");
        $this->setConnection(mysqli_connect($this->getHost(), $this->getUser(), $this->getPasswd(), $this->getDbName()));
        
        if(!$this->getConnection()){
            echo ("<br>"."Infelizmente não foi possível estabelecer a conexão com seu DB. NUMBER ERROR: ". mysqli_connect_errno());
            exit();
        }
        
        
    }

    public function getHost(){
        return $this->host;
    }

    public function setHost($host){
        $this->host = $host;
    }

    public function getUser(){
        return $this->user;
    }

    public function setUser($user){
        $this->user = $user;
    }

    public function getPasswd(){
        return $this->passwd;
    }

    public function setPasswd($passwd){
        $this->passwd = $passwd;
    }

    public function getConnection(){
        return $this->connection;
    }

    public function setConnection($connection){
        $this->connection = $connection;
    }


    public function getDbName(){
        return $this->dbName;
    }

    public function setDbName($dbName){
        $this->dbName = $dbName;
    }

}




?>