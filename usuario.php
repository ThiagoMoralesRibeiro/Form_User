<?php 
include_once 'person.class.php';

$nameUser = $_POST['namePerson'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$birthDate= $_POST['birthDate'];
$tel= $_POST['telefone'];
$passWord = $_POST['pwd'];


$usuario = new Person($email, $nameUser, $cpf, $birthDate, $tel, $passWord);

$usuario->saveQuery();

?>




