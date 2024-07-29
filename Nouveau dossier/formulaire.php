<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
  </head>
  <body>

    <form action="insert.php" method="POST">
      <fieldset>
        <legend>Identifiant</legend>
			<p>
        <label for="login">login :</label> 
				<input type="text" name="login" value="" />
				</br></br>
				<label for="login">mot de passe :</label> 
				<input type="password" name="motDePasse" value="" />
        <br></br> 
        <label for="login">mail :</label> 
				<input type="text" name="mail" value="" />
				</br></br>
        <label for="login">prenom :</label> 
				<input type="text" name="prenom" value="" />
        <br></br>
        <label for="login">nom :</label> 
				<input type="text" name="nom" value="" />
        <br></br>
				<input type="submit" name="submit" value="Identification" />
      </p>
      </fieldset>
    </form>
  </body>
</html>
    
