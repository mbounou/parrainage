<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/x, html1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>authentification</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

	<?php
		if (isset($_POST['password']) AND $_POST['password'] == "220319913" AND $_POST["username"] AND $_POST["username"]=="mbounoucedric@gmail.com")  // Si le mot de passe est bon
		{
		/* On affiche les codes le premier parametre de if permet de vérifier si l'on a envoyé un mot de 
		passe avec isset*/
		?>
		
		<p><strong>merci vous avez été identifiez avec succes</strong></p>
		
		<div class="container">
			<a href="index.php">accueil</a>
		</div>
		
		<?php
			}
			else // Sinon, on affiche un message d'erreur
			{
			echo '<p>Mot de passe incorrect</p>';
			}
		?>
	</body>
</html>
