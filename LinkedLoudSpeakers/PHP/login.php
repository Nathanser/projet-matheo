<?php
    include ("fonction.php");
		if($bdd = mysqli_connect('172.16.201.111','sio','slam','enceintes')){
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			if($bdd) {
				if(empty($username) || empty ($password)) {
					echo 'Remplir tous les champs';
				}
			}
			$sql = 'SELECT COUNT(*) AS verifinfo FROM users WHERE username = "'.$username.'" AND password = "'.$password.'";';
			$requete = mysqli_query($bdd,$sql);
			$donnes = mysqli_fetch_assoc($requete);
				echo $donnes['verifinfo'];
            
				if($donnes['verifinfo'] == 1){
					include ("accueil.php");
				}
				else{
					echo "Information incorect";
				}
		
		if(!isset($_SESSION)){
			session_start();
			$requete5 = 'SELECT* FROM enceintes';
			$resultat = mysqli_query($bdd,$requete5);
			$donnes1 = mysqli_fetch_assoc($resultat);
			$_SESSION['username'] = $donnes1['username'].''; 
			$req1 = 'INSERT INTO tbl_log (Id,DateDebut,DateFin,IdUser) VALUES (null,NOW(), null,"'.$donnes1['id'].'")';
			$data = mysqli_query($bdd,$req1);
			include("verif.php");
			
			
		}
		else{
			session_start();
			$_SESSION['login'] = $login ;
			include("verif.php");
	}
}
else{
echo "Connexion BDD KO";
}
?>
