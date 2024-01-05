<?php

class Stock{
    public function __construct(private int $idStock, private int $idChaussure, private int $idPointure){}

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