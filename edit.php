<?php
require 'db.php';

$nom = '';
$prix = '';
$image = '';
$categorie = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'SELECT * FROM produit WHERE id_produit = ?';
    $select = $connexion->prepare($sql);
    $select->execute(array($id));
    $row = $select->fetch(PDO::FETCH_ASSOC);
    $nom = $row['nom_produit'];
    $prix = $row['prix'];
    $image = $row['image'];
    $categorie = $row['categorie'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $categorie = $_POST['categorie'];

    if (!empty($_FILES['image']['tmp_name'])) {
        $image_location = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_up = "imagess/".$image_name;
        move_uploaded_file($image_location, 'imagess/'.$image_name);
    } else {
        $image_up = $image;
    }

    $sql = 'UPDATE produit SET nom_produit = ?, prix = ?, image = ?, categorie = ? WHERE id_produit = ?';
    $upd = $connexion->prepare($sql);
    $a = $upd->execute(array($nom, $prix, $image_up, $categorie, $id));

    if ($a) {
        header('location: produits.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <label for="">categorie</label><br>
        <select name="categorie">
            <option value="Batteries" <?= ($categorie === 'Batteries') ? 'selected' : '' ?>>Batteries</option>
            <option value="Huile moteur" <?= ($categorie === 'Huile moteur') ? 'selected' : '' ?>>Huile moteur</option>
            <option value="Accessoires" <?= ($categorie === 'Accessoires') ? 'selected' : '' ?>>Accessoires</option>
        </select><br>
        <label for="">Nom de produit :</label><br>
        <input type="text" name="nom" value="<?= $nom ?>"><br>
        <label for="">Prix de produit :</label><br>
        <input type="text" name="prix" value="<?= $prix ?>"><br>
        <label for="">Télécharger l'image</label><br>
        <input type="file" name="image"><br><br>
        <input type="submit" value="Modifier le produit"><br><br>
        <a href="produits.php">Afficher tous les produits</a>
    </form>
</body>
</html>