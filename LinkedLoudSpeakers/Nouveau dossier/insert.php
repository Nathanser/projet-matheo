<?php
    include('fonction.php');
    $connex = recupInfos('172.16.201.111','sio','slam','employe');
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $login = $_POST['login'];
    $mdp = $_POST['motDePasse'];

    if($connex){
        $requete ='INSERT INTO personne VALUES(null,"'.$nom.'","'.$prenom.'","'.$mail.'","'.$login.'","'.$mdp.'")';
        echo $requete;
        $resultat = mysqli_query($connex,$requete);
    }
?>




























    

    