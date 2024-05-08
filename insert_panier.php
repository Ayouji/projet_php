<?php
include_once "db.php";
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array();
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $produit = mysqli_query($con ,"SELECT * From products WHERE id = $id");
    if(empty(mysqli_fetch_assoc($produit))){
            die("ce produit n'existe pas");
        }
        if(isset($_SESSION['panier'][$id])){
            $_SESSION['panier'][$id]++;
        }else{
            $_SESSION['panier'][$id]= 1;
        }
        header("location:index.php");
    }
?>