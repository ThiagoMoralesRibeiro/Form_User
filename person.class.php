<?php

include_once 'DBConnection.class.php';


class Person {
    private $idUser;
    private $email;
    private $password;
    private $name;
    private $cpf;
    private $birthDate;
    private $tel;
    private $active;
   
    
        
    
    function __construct($email, $name, $cpf, $birthDate, $tel, $password) {
        $this->setEmail($email);
        $this->setName($name);
        $this->setCpf($cpf);
        $this->setBirthDate($birthDate);
        $this->setTel($tel); 
        $this->setPassword($password);
        $this->saveQuery();
    }

    public function getIdUser(){
        return $this->idUser;
    }

    public function setIdUser($idUser){
        $this->idUser = $idUser;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getBirthDate(){
        return $this->birthDate;
    }

    public function setBirthDate($birthDate){
        $this->birthDate = $birthDate;
    }

    public function getTel(){
        return $this->tel;
    }

    public function setTel($tel){
        $this->tel = $tel;
    }

    public function getActive(){
        return $this->active;
    }

    public function setActive($active){
        $this->active = $active;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
    public function setPassword($password){
        $this->password = $password;
    }
    
    public function saveQuery() {
        $insert = new DBConnection();
        $insert->getConnection()->query(("INSERT INTO usuario (email, nome, cpf, dtNasc, telefone, senha) VALUES ('".$this->getEmail()."',  '".$this->getName()."', '".$this->getCpf()."','".$this->getBirthDate()."','".$this->getTel()."', '".$this->getPassword()."')"));
               
    }


    

}




?>

