<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="affiche.php" enctype="multipart/form-data">
	     <!-- On limite le fichier à 2Mo -->
	     <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
	     Fichier : <input type="file" name="logo">
	     <input type="submit" name="envoyer" value="Envoyer le fichier">
	</form>
	
</body>
</html>