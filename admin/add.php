<?php
ob_start();
?>
<form action="" method="post">
    <label for="">libelle</label><input type="text" name="lib" id="" class="form-control"><br>
    <label for="">prix</label><input type="text" name="pu" id="" class="form-control"><br>
    <label for="">prix</label><input type="text" name="pu" id="" class="form-control"><br>
    <label for="">quantité</label><input type="text" name="qte" id="" class="form-control"><br>
    <label for="">description</label><textarea name="des" id="" class="form-control"></textarea><br>
    <label for="">danger</label><input type="text" name="img" id="" class="form-control"><br>
    <label for="">en promo</label><input type="text" name="pro" value="0" id="" class="form-control"><br>
    <input type="submit" value="ajouter" name="ok">
</form>
<?php
    
    require_once "../classes/CRUD_Produit.php";

    if (isset($_POST['ok'])){
    $crud=new CRUD_produit();
    //$produit=new produit();
    
    $res=$crud->add($id);
    $res = $pdo->exec($sql);
    if($res){
        header("location:all.php");
        exit;
    }
    else echo "pb d'insertion";
}
        $contenu=ob_get_clean();
        $titre="Liste des produits";
        include "layout.php"

?>
