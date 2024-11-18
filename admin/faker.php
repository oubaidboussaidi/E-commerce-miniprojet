<?php
require_once "../connexion.php";
$connexion=new connexion();
$pdo=$connexion->getConnexion();
$pdo->exec("delete from produit");

$sql="";
for ($i=1; $i<100;$i++){
    $lib="produit N°:0".$i;
    $pu=random_int(1,5000);
    $qte=random_int(1,1000);
    $des="azesqffsdgqsdg";
    $img='https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.facebook.com%2Fpcparadize%2F&psig=AOvVaw0O2jM9h8UgRSLbWe5MmKDM&ust=1731573182170000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMi1z-3y2IkDFQAAAAAdAAAAABAE';
    $pro=random_int(0,1);
    $sql="insert into produit values(NULL,'$lib',$pu,$qte,'$des',$img,$pro);";
}
$res=$pdo->query($sql); //$res , un objet PDOStatment

?>
?>