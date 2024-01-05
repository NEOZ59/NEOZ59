<?php

class Adresse{
    public function __construct(private int $idAdresse, private string $numero, private string $rue, private string $codePostal, private string $ville, private string $pays, private string $appartement){}

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