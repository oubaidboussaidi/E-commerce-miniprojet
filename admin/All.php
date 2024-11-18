<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    require_once "../connexion.php";
    $connexion=new connexion();
    $pdo=$connexion->getConnexion();
    $sql="select * from produit;";
    $res=$pdo->query($sql); //$res , un objet PDOStatment
    $LesProduits=$res->fetchAll(pdo::FETCH_NUM);
    echo "<pre>";
    var_dump($LesProduits);
    echo "<pre>";
    ?>

</body>
</html>