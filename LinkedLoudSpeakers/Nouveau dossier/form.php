<?php
    if($bdd = mysqli_connect('172.16.201.111','sio','slam','employe')){
    
        echo 'Connexion Reussi ';
    }
    else{
        echo 'Erreur de connexion ';
    }

        $requete = 'SELECT COUNT(*) AS verifInfo FROM personne WHERE login ="'.$login.'" AND motDePasse = "'.$motDePasse.'";';
        echo $requete ;
        $requete = mysqli_query($bdd,$requete);
        $donnes = mysqli_fetch_assoc($requete);
        echo $donnes[verifInfos];
?>

