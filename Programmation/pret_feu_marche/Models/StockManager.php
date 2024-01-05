<?php

require_once "Model.class.php";
require_once "Stock.class.php";

class StockManager extends BDConnection{
    private $Stocks;

    public function ajouterStock($stock){
        $this->Stocks[] = $stock;
    }

    public function getStock(){
        return $this->Stocks;
    }

    public function chargementStock(){
        $req = $this->getBDD()->prepare('SELECT * FROM Chaussure');

        $req->execute();
        $mesStock = $req->fetchall(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesStock as $value){
            $Stockage = new Stock($value['idChaussure'],$value['idCategorie'],$value['prix'],$value['couleur'],$value['UrlImage'],$value['idModele'],$value['idMarque']);
            $this->ajouterStock($Stockage);
        }
    }
}
