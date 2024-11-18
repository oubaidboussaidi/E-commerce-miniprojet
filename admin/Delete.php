<?php

require_once "/classes/CRUD_Produit.php";
    
$crud=new CRUD_produit();
$id=$_GET['id'];
$res=$crud->delete($id);
if($res){
    header("location:all.php");
    exit;
}
else echo "problem de suppression";
?>