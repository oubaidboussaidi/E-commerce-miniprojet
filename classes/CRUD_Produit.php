<?php
include_once "produit.php";
class CRUD_Produit {
    private $pdo;
    function  __construct() {
        $connexion=new connexion();
        $this->pdo=$connexion->getConnexion();

    }
    function  add(){
            }
    function  delete($id){
        $sql="delete from produit where id=$id";
        $res=$this->pdo->exec($sql);
        return $res;
    }
    function  find(){}
    function findAll(){
        $sql="select * from produit";
        $res=$this->pdo->query($sql);
        return $res->fetchAll(pdo::FETCH_NUM);
    }
    function edit(){}}
