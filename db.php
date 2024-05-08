<?php 
$host = 'localhost';
$dbname = 'phpstore';
$pass = 'root';
$user ='';
try{
    $connexion = new PDO("mysql:host=$host;dbname=$dbname",$pass,$user);
}catch(PDOException $e){
    die("Impossible de se connecter à la base de données $dbname". $e->getMessage());
}
?>