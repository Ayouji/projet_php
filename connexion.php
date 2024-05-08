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
        <input type="text" name="pseudo" placeholder="Pseudo"><br>
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="submit" value="connexion">
    </form>
    <hr>
    <a href="inscription.php">Inscription</a>
</body>
</html>
<?php 
require 'db.php';
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $pseudo = $_POST['pseudo'];
        $password = $_POST['password'];
        if(isset($pseudo) && isset($password)){
            if($pseudo == 'admin' && $password == 'admin'){
                header('location:produits.php');
                exit;
            }
                                                                                            
            $stmt = $connexion->prepare("SELECT * FROM client WHERE pseudo = ? and password = ?");
            $stmt->execute(array($pseudo , $password));
        
            if ($stmt->rowCount() == 1) {
                session_start();

                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $_SESSION['pseudo'] = $row['pseudo'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['compte']=true;
                header("Location: index.php");
                exit();
            } else {
                echo "Identifiants de connexion incorrects.";
            }
        }else{
            echo 'ereur';
        }
}
?>