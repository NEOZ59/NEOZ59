<?php

define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "Controller/ChaussureController.php";
$ChaussureControlleur= new ChaussuresController;

try{
    if (empty($_GET['page'])){
        require_once "Views/accueil.view.php";
    }else{
        $url = explode("/",filter_var($_GET['page']),FILTER_SANITIZE_URL);
        switch($url[0]){
            case "accueil" :
                require "Views/accueil.view.php";
                break;
            case "articles" :
                if(empty($url[1])){
                    $ChaussureControlleur->afficherChaussures();
                }elseif ($url[1]="l"){
                    $ChaussureControlleur->afficherChaussure($url[2]);
                }else{
                    throw new Exception("La page n'existe pas");
                }
                break;
            default: throw new Exception("La page n'existe pas");
        }
    }
}catch(Exception $e){
    echo $e->getMessage();
}