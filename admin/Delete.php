<?php
require_once "../connexion.php";
$connexion=new connexion();
$pdo=$connexion->getConnexion();
$id=$_GET['id'];
$sql="delete from produit where id=$id";
$res=$pdo->exec($sql);
if($res){
    header("location:all.php");
    exit;
}
else echo "problem de suppression";

?>