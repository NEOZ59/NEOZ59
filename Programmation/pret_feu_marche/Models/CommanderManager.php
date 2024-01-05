<?php

class CommanderManager{
    private $commanders;

    public function ajouterCommander($commander){
        $this->commanders[] = $commander;
    }

    public function getCommander(){
        return $this->commanders;
    }
}