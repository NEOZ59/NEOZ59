<?php

class AdresseManager{
    private $adresses;

    public function ajouterAdresse($adresse){
        $this->adresses[] = $adresse;
    }

    public function getAdresse(){
        return $this->adresses;
    }
}