<?php
    function connexion($adresse,$nom,$mdp,$base){
        $bdd = mysqli_connect($adresse,$nom,$mdp,$base);
        return $bdd;
    } 
?>