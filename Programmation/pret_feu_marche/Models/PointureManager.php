<?php

require_once "Model.class.php";
require_once "Pointure.class.php";

class PointureManager extends BDConnection{
    private $pointures;

    public function ajouterPointure($pointure){
        $this->pointures[] = $pointure;
    }

    public function getLivre(){
        return $this->pointures;
    }

    public function chargementPointures(){
        $req = $this->getBDD()->prepare('SELECT * FROM Chaussure');

        $req->execute();
        $mesPointures = $req->fetchall(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesPointures as $value){
            $Tailles = new Pointure($value['idPointure'],$value['numero']);
            $this->ajouterPointure($Tailles);
        }
    }
}