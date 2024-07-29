<?php
    include ("fonction.php");
		if($bdd = mysqli_connect('172.16.201.111','sio','slam','enceintes')){
			$username = $_POST['username'];
			$password = md5($_POST['password']);

			
			$sql = 'SELECT COUNT(*) AS verifinfo FROM users WHERE username = "'.$username.'" AND password = "'.$password.'";';
				
				$requete = mysqli_query($bdd,$sql);
				$donnes = mysqli_fetch_assoc($requete);
				echo $donnes['verifinfo'];
            
				if($donnes['verifinfo'] == 1){
					echo " Connexion reussie";
				}
				else{
					echo "Information incorect";
				}
		}
?>