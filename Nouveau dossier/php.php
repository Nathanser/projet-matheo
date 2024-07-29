<?php
    if($bdd = mysqli_connect('172.16.205.105','sio','slam','employe')){
    
        echo 'Connexion Reussi ';
    }
    else{
        echo 'Erreur de connexion ';
    }
    $login = $_POST['login'];
    $motDePasse = $_POST['motDePasse'];

    $requete = 'SELECT COUNT(*) AS VerifInfos FROM personne WHERE login = "'.$login.'" AND motDePasse ="'.$motDePasse.'";';
    echo $requete ;

    $resultat = mysqli_query($bdd,$requete);
    $donnes = mysqli_fetch_assoc($resultat);
    echo $donnes['VerifInfos'];
?>