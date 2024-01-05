<?php

class Commander{
    public function __construct(private int $idChaussure, private int $Commande, private int $quantité){}

    public function __get($attr)
    {
        if (property_exists($this,$attr)){
            return $this->$attr;
        }else;{
            trigger_error("L'attibut $attr n'existe pas", E_USER_ERROR);
            return NULL;
        }
    }

    public function __set($name,$value){
        $this->$name = $value;
    }
}