<?php
declare(strict_types=1);
session_start();

define("URL","http://localhost:8888/modul6cours/tp_filsRouge/tp_php/index.php");

$page = "";



if(isset($_GET["page"]) && !empty($_GET["page"])){
    $page = $_GET["page"];
}else{
    // alors afficher la page d'accueil 
    $page = "/"; 
}


$routes= [
    "/" => ["home","FrontController"],
    "connexion" => ["connexion","FrontController"],
    "inscription" => ["inscription","FrontController"],
    //utilisation d'une fonction fait pas ce controleur 
];


require_once "Model/BDD.php";
require_once "Controller/AbstractController.php";
require_once "Controller/FrontController.php";


if(array_key_exists($page , $routes)){
    $class = $routes[$page][1];
    $method = $routes[$page][0];
    $p = new $class();
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    call_user_func([$p, $method] , $id);
    //$p->{$method}();
}else {
    $p = new ErreurController();
    $p->erreur(404 , "la page demandée n'existe pas");
}
