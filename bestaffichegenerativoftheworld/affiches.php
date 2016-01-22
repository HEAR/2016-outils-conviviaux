<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
  	<script src="js/script.js" type="text/javascript"></script>
</head>
<body>
	<div class="container">
	<div class="aleatoire">
		<h1 class="justify">
			<span class="row"><?php echo $_POST['asso']?></span><br>
			<span class="row"><?php echo $_POST['titre']?></span><br>
			<span class="row"><?php echo $_POST['soustitre']?></span><br>
			<span class="row"><?php echo $_POST['date']?></span><br>
			<span class="row"><?php echo $_POST['heure']?></span><br>
			<span class="row"><?php echo $_POST['adresse']?></span><br>
		</h1>
	</div>

	<div class="fixe">

		<p><?php echo $_POST['presentation']?></p>

		<!-- pour uploder photos -->

	<?php
	$dossier = 'uploads/';
	$fichier = basename($_FILES['logo']['name']);
	$taille_maxi = 2000000;
	$taille = filesize($_FILES['logo']['tmp_name']);
	$extensions = array('.png', '.gif', '.jpg', '.jpeg');
	$extension = strrchr($_FILES['logo']['name'], '.'); 
	//Début des vérifications de sécurité...
	if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
	{
	     $erreur = '  ';
	}
	if($taille>$taille_maxi)
	{
	     $erreur = 'Le fichier est trop gros...';
	}
	if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
	{
	     //On formate le nom du fichier ici...
	     $fichier = strtr($fichier, 
	          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
	          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
	     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
	     if(move_uploaded_file($_FILES['logo']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
	     {?>
	     <div class= "image">
			 <img src="<?php echo $dossier.$fichier?>" >
	      </div>
	     <?php }
	     else //Sinon (la fonction renvoie FALSE).
	     {
	          echo 'Echec de l\'upload !';
	     }
	}
	else
	{
	     echo $erreur;
	}
?>
	</div>
	</div>
</body>
</html>