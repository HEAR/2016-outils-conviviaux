<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Random Typefaces</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="formulaire">
	
	<div class= "francais"> Bienvenue sur le générateur d'affiche.
	<br> Créez facilement votre propre visuel ! 
	</div>
	<div class= "anglais"> Welcome on the poster generator.
    <br> Create easily your own poster! 
	</div>

	<div class="imagerond"><img src="image/Fondcerclepage_a.png" alt="">
	</div>

	<div class="contact"> contact	
	</div>	

	<div class="info"> info	
	</div>

	<!-- Créer le formulaire + je donne une method POST + dans action je lui indique dans quel fichier va s'afficher les données-->
	<form action="affiches.php" method="POST"enctype="multipart/form-data"> 
<!-- 		<fieldset></fieldset> -->
		<!-- Insérer les input du formulaire  -->
<div class="colonne1">	
		<ul> 
			<div class="asso">
			<li> <label for="asso">nom / </label><label class="label-pres">name</label>
			<input type="text" name="asso"> </li>
			</div>

			<div class="titre">
			<li> <label for="titre">titre / </label><label class="label-pres">title</label>
			<input type="text" name="titre"> </li>
			</div>

			<div class="soustitre">
			<li> <label for="soustitre">sous titre / </label><label class="label-pres">subtitle</label>
			<input type="text" name="soustitre"> </li>
			</div>


			<div class="date">
			<li> <label for="date">date / </label><label class="label-pres">date</label>
			<input type="text" name="date"> </li>
			</div>

			<div class="heure">
			<li> <label for="heure">horaires / </label><label class="label-pres">hours</label>
			<input type="text" name="heure"> </li>
			</div>


			<div class="adresse">
			<li> <label for="adresse">adresse / </label><label class="label-pres">adresses</label>
			<input type="text" name="adresse"> </li>
			</div>	
		</ul> 
</div>


<div class="colonne2">
		<ul>
			<div class="presentation">
			<li> <label for="presentation">Texte de présentation</label>
       		<br/>
       		<li class="label-pres"> <label for="presentation">presentation text</label>
       		<br/>
       		<textarea name="presentation" id="presentation" rows="7" cols="45" maxlength="500"></textarea></li>
			</div>


			<div class="logo">
			<li>
			<!-- On limite le fichier à 2Mo -->
	     	<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
	     	Logo (- de 2mo) : <input type="file" name="logo">
	 		</li>
	 		</div>
			

			<div class="valider">
				
			<!-- Bouton Valider le formulaire -->
			<input type="submit">
			</div>
		</ul>
</div>

	</form>
	<div class="instruction">
		<div class="francais"> Instructions <br>
	</div>

	<div class= "anglais"> Instructions
	</div>

	<div class= "textefrancais"> 
		Remplissez le formulaire avec les différentes informations nécessaires <br>
		à votre communication puis cliquez sur le bouton «VALIDER».<br>
		Une fois l’affiche créee faites cmd + P pour l’imprimer et l’enregister.
	</div>

	<div class= "texteanglais"> 
		Fill the blank with your different information then click on «VALIDER».<br>
		When the poster is created press cmd + P to save and print it.<br>
	</div>


	
	
</body>
</html>
