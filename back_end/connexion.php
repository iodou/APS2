<?php
    $machine="localhost";
    $port=3306;
    $id= "root";
    $mdp= "";
    $nomdebase="quizz";

    $connexion=new PDO('mysql:host='.$machine.';port='.$port.';dbname='.$nomdebase, $id,
    $mdp);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
?>
