<?php
    function recupInfos($adresse,$nom,$mdp,$nomBase) {
        $bdd = mysqli_connect($adresse,$nom,$mdp,$nomBase);
        return $bdd;
    }
?>