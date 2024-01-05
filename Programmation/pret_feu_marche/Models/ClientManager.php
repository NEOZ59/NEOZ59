<?php

class ClientManager{
    private $clients;

    public function ajouterClient($client){
        $this->clients[] = $client;
    }

    public function getClient(){
        return $this->clients;
    }
}