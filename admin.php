<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">categorie</label><br>
        <select name="categorie">
            <option value="Batteries">Batteries</option>
            <option value="Huile moteur">Huile moteur</option>
            <option value="Accessoires">Accessoires</option>
        </select><br>
        <label for="">Nom de poduit :</label><br>
        <input type="text" name="nom"><br>
        <label for="">Prix de produit :</label><br>
        <input type="text" name="prix"><br>
        <label for="">telecharger l'image</label><br>
        <input type="file" name="image"><br><br>
        <input type="submit" value="Ajouter le produit"><br><br>
        <a href="produits.php">afficher tout les produit</a>
    </form>
</body>
</html>
<?php 
require 'db.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        $prix = $_POST['prix'];
        $image = $_FILES['image'];
        $image_location = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_up = "imagess/".$image_name;
        $categorie = $_POST['categorie'];

        if (empty($nom) || empty($prix) || empty($image_location) || empty($categorie)) {
            echo "<script>alert('remplir tout les Champs')</script>";
            exit;
        }
    
        $sql = "INSERT INTO produit (nom_produit, prix, image, categorie) VALUES (?, ?, ?, ?)";
        $insert = $connexion->prepare($sql);
        $insert->execute(array($nom, $prix, $image_up, $categorie));
            if(move_uploaded_file($image_location,'imagess/'.$image_name)){
                echo "<script>alert('le produit à été ajouter avec succés')</script>";
            }else {
                echo "<script>alert('erreur')</script>";
            }
        }
        
?>
