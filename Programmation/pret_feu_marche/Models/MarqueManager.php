<?php

require_once "Model.class.php";
require_once "Marque.class.php";

class MarqueManager extends BDConnection{
    private $marques;

    public function ajouterMarque($marque){
        $this->marques[] = $marque;
    }

    public function getMarque(){
        return $this->marques;
    }
    public function chargementMarque(){
        $req = $this->getBDD()->prepare('SELECT * FROM Marque');

        $req->execute();
        $mesLivres = $req->fetchall(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesLivres as $value){
            $book = new Marque($value['idMarque'],$value['nom']);
            $this->ajouterMarque($book);
        }
    }
}