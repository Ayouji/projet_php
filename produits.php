
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 100px;
            height: 80px;
            border-radius: 20px;
        }
        table{
            text-align: center;
        }
    </style>
</head>
<body>
    <script>
        function confirmDelete() {
            return confirm("Êtes-vous sûr de vouloir supprimer cet étudiant ?");
        }
    </script>
    <?php
    require 'db.php';
        $sql = 'SELECT * FROM produit';
        $affi = $connexion->query($sql);
    ?>
    <table border="1" width="100%">
        <tr>
            <th>Image de produit</th>
            <th>Nom de produit</th>
            <th>Prix</th>
            <th>Catégorie</th>
            <th>Action</th>
        </tr>
    
    <?php
    while($ligne = $affi->fetch()){
    ?>
        <tr>
            <td><img src="<?php echo $ligne['image'] ?>"></td>
            <td><?php echo $ligne['nom_produit'] ?></td>
            <td><?php echo $ligne['prix'] ?></td>
            <td><?php echo $ligne['categorie'] ?></td>
            <td><a href="edit.php?id=<?= $ligne['id_produit'] ?>">Edit</a>
            <a href="delet.php?id=<?= $ligne['id_produit'] ?>" onclick='return confirmDelete()'>supprimer</a></td>
        </tr>
    <?php  } ?>
    </table>
</body>
</html>