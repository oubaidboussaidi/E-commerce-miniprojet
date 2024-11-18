    <?php
    ob_start();
    include_once "/classes/CRUD_Produit.php";
    $crud=new CRUD_produit();
    $LesProduits=""
    ?>
    <table class="table">
        <tr>
            <th>identifiant</th>
            <th>libellé</th>
            <th>prix</th>
            <th>QTE</th>
            <th colspan="3">action</th>
        </tr>
        <?php 
        foreach ($LesProduits as $produit) {
        
        ?>
        <tr>
            <td><?=$produit[0]?></td>
            <td><?=$produit[1]?></td>
            <td><?=$produit[2]?></td>
            <td><?=$produit[3]?></td>
            <td><a href="detail.php?id=<?=$produit[0]?>" class="btn btn-info btn-sn">Voir detail...</a></td>
            <td><a href="Delete.php?id=<?=$produit[0]?>" class="btn btn-danger btn-sn">Supprimer</a></td>
            <td><a href="update.php?id=<?=$produit[0]?>" class="btn btn-dark btn-sn">Editer</a></td>
        </tr>
        <?php
        }
        ?>
        
    </table>

    <?php
        $contenu=ob_get_clean();
        $titre="Liste des produits";
        include "layout.php"
    ?>