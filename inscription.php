<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nom" placeholder="Nom & Prenom"><br>
        <input type="text" name="pseudo" placeholder="Pseudo"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Mot de passe"><br>
        <input type="submit" value="Inscription">
    </form>
    <hr>
    <a href="connexion.php">Connexion</a>
</body>
</html>
<?php 
    require 'db.php';
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nom = $_POST['nom'];
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(isset($nom) && isset($pseudo) && isset($email) && isset($password)){
            $sql = 'INSERT INTO client(nom_prenom,pseudo , email , password) VALUES(?,?,?,?)';
            $inser = $connexion->prepare($sql);
            $inser->execute(array($nom , $pseudo , $email ,$password));
        }else{
            echo 'b';
        }
    }
?>