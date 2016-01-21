<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

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
	     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
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
	          <img src="<?php echo $dossier.$fichier?>" >
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
	
</body>
</html>