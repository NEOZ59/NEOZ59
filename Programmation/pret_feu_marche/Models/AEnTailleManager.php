<?php

class AEnTailleManager{
    private $AEnTailles;

    public function ajouterAEnTaille($AEnTaille){
        $this->AEnTailles[] = $AEnTaille;
    }

    public function getAEnTaille(){
        return $this->AEnTailles;
    }
}