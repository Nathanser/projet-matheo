<?PHP
	$bdd = mysqli_connect('172.16.201.111','sio','slam','enceintes');
	if(isset($_POST["deconnex"]) || empty($_SESSION)){
	$req3 = 'UPDATE tbl_log SET DateFin = NOW()';
	$data2 = mysqli_query($bdd,$req3);
	
	$req4 = 'UPDATE tbl_log SET DateFin = NOW();';
	$data4 = mysqli_query($bdd,$req4);
	
	session_start();
	$_SESSION = array();
	session_destroy();
	unset($_SESSION);
	unset($_POST);
	echo " vous êtes bien déconnecté";
	include("connexion.html");
}
else{
	?>
		<form method ="POST"  Action="verif.php">
			<input type="submit" name="deconnex" value="Deconnexion"/>
		</form>
	<?PHP
}
?>