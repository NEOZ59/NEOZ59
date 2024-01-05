<?php

require_once "Model.class.php";
require_once "Chaussure.class.php";

class ChaussureManager extends BDConnection{
    private $chaussures;

    public function ajouterChaussure($chaussure){
        $this->chaussures[] = $chaussure;
    }

    public function getChaussure(){
        return $this->chaussures;
    }
    public function chargementChaussures(){
        $req = $this->getBDD()->prepare('SELECT * FROM Chaussure');

        $req->execute();
        $mesChaussures = $req->fetchall(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesChaussures as $value){
            $shoes = new Chaussure($value['idChaussure'],$value['idCategorie'],$value['prix'],$value['couleur'],$value['UrlImage'],$value['idModele'],$value['idMarque']);
            $this->ajouterChaussure($shoes);
        }
    }
    public function getChaussureById($id){
        for($i=0;$i<count($this->chaussures);$i++){
            if ($this->chaussures[$i]->idChaussure == $id){
                return $this ->chaussures[$i];
            }
        }
    }
    public function ajoutChaussureBD($idCategorie,$prix,$couleur,$image,$idModele,$idMarque){
        $req = "INSERT INTO chaussure(idCategorie,prix,couleur,image,idModele,idMarque)
        values(:idCategorie,:prix,:couleur,:image,:idModele,:idMarque)";

        $stat = $this->getBDD()->prepare($req);
        $stat->bindValue(":idCategorie","$idCategorie",PDO::PARAM_INT);
        $stat->bindValue(":prix","$prix",PDO::PARAM_STR);
        $stat->bindValue(":couleur","$couleur",PDO::PARAM_STR);
        $stat->bindValue(":image","$image",PDO::PARAM_STR);
        $stat->bindValue(":idModele","$idModele",PDO::PARAM_INT);
        $stat->bindValue(":idMarque","$idMarque",PDO::PARAM_INT);

        $resultat = $stat->execute();
        $stat->closeCursor();

        if($resultat > 0){
            $chaussure = new Chaussure($this->getBDD()->lastInsertId(),$idCategorie,$prix,$couleur,$image,$idModele,$idMarque);
            $this->ajouterChaussure($chaussure);
        }
    }
}