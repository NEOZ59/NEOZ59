<?php

class StockerManager{
    private $stockages;

    public function ajouterStocker($stocker){
        $this->stockages[] = $stocker;
    }

    public function getStocker(){
        return $this->stockages;
    }
}