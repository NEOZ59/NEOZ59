<?php

require_once "Model.class.php";
require_once "Modele.class.php";

class ModeleManager extends BDConnection{
    private $modeles;

    public function ajouterModele($modele){
        $this->modeles[] = $modele;
    }

    public function getModele(){
        return $this->modeles;
    }

    public function chargementModele(){
        $req = $this->getBDD()->prepare('SELECT * FROM Modele');

        $req->execute();
        $mesLivres = $req->fetchall(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesLivres as $value){
            $book = new Modele($value['idModele'],$value['nom'],$value['idMarque']);
            $this->ajouterModele($book);
        }
    }
}