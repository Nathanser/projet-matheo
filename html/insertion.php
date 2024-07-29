<?php
    include ("fonction.php");
    if($bdd = mysqli_connect('172.16.201.111','sio','slam','enceintes')){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $email = $_POST['email'];
        $sql = mysqli_query($bdd,"INSERT INTO users VALUES ('$username','$password','$email')");
        if ($sql){
            echo 'Compte crée'; 
        }
        else {
            echo 'Erreur d\'inscription'; 
        }
    }         

?>


