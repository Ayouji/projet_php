<?php 
require 'db.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = 'DELETE FROM produit where id_produit= ? ';
        $delet = $connexion->prepare($sql);
        $aa = $delet->execute(array($id));
        if($aa){
            header('location: produits.php');
        }
        
    }
?>