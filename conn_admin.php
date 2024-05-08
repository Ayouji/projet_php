<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="">Nom :</label><br>
        <input type="text" name="nom"><br>
        <label for="">Mot de passe</label><br>
        <input type="password" name="mot"><br>
        <input type="submit" value="connecter">

    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom = $_POST['nom'];
    $password = $_POST['mot'];
    if(isset($nom) && isset($password)){
        if($nom == 'admin' && $password == 'admin'){
            header('location:admin.php');
        }else{
            echo 'Mot de passe ou nom incorrect';
        }
    }else{
        echo 'remplir tout les Champs';
    }
}
?>