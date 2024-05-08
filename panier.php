<?php
session_start();
include_once "db.php";
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}
$panier = array_keys($_SESSION['panier']);
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="panier">
    <a href="index.php" class="link">Boutique</a>
    <section>
        <table>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Action</th>
            </tr>
            <?php
                $id = array_keys($_SESSION['panier']);
                if (empty($id)) {
                    echo "Votre panier est vide.";
                } else {
                    $query = "SELECT * FROM produit WHERE id IN (" . implode(',', $id) . ")";

                    $produit = mysqli_query($con, $query);

                    foreach ($produit as $product) :

                        $total = $total + $product['price'] * $_SESSION['panier'][$product['id']];
                    
                        ?>
                        <tr>
                            <td><img src="image/<?= $product['img'] ?>"></td>
                            <td><?= $product['name'] ?></td>
                            <td><?= $product['price'] ?></td>
                            <td><?= $_SESSION['panier'][$product['id']] ?></td>
                            <td><a href="panier.php?del=<?= $product['id'] ?>"><img src="image/delete.png"></a></td>
                        </tr>
                    <?php endforeach;
                }

                ?>
            <tr class="total">
                <th>total :<?=$total?>£</th>
            </tr>
        </table>
    </section>

</body>
</html>