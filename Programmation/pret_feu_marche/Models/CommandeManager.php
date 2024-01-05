<?php

class CommandeManager{
    private $commandes;

    public function ajouterCommande($commande){
        $this->commandes[] = $commande;
    }

    public function getCommande(){
        return $this->commandes;
    }
}