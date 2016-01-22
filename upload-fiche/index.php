<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<form method="POST" action="fiche.php" enctype="multipart/form-data">
			<div class="cat">
				<h3>Catégories</h3>
				<input type="radio" name="categories" value="Mobilier">Mobilier<br>
			  <input type="radio" name="categories" value="Électronique">Électronique<br>
			</div>
			<div class="sub-cat">
				<h3>Sous-Catégories</h3>
				<div class="sub-cat-mobilier">
					<input type="radio" name="sous-categories" value="Lampes">Lampes<br>
			  	<input type="radio" name="sous-categories" value="Chaises">Chaises<br>
				</div>
				<div class="sub-cat-electronique">
					<input type="radio" name="sous-categories" value="Ordinateur">Ordinateur<br>
			  	<input type="radio" name="sous-categories" value="Téléphone">Téléphone<br>
				</div>
		  </div>
		  <div class="marques">
				<h3>Marques</h3>
				<div class="marques-ordinateur">
				  <input type="radio" name="marques" value="Apple">Apple<br>
				  <input type="radio" name="marques" value="Asus">Asus<br>
				</div>
				<div class="marques-telephone">
				  <input type="radio" name="marques" value="Apple">Apple<br>
				  <input type="radio" name="marques" value="Samsung">Samsung<br>
				</div>
		  </div>
		  <div class="produit">
		  	<h3>Marques</h3>
		  	<div class="produit-ordinateur-apple">
				  <input type="radio" name="produit" value="Mac Book Pro">Mac Book Pro<br>
				  <input type="radio" name="produit" value="Mac Book Air">Mac Book Air<br>
				</div>
				<div class="produit-ordinateur-asus">
				  <input type="radio" name="produit" value="Modèle Asus 1">Modèle Asus 1<br>
				  <input type="radio" name="produit" value="Modèle Asus 2">Modèle Asus 2<br>
				</div>
				<div class="produit-tel-apple">
				  <input type="radio" name="produit" value="Iphone 6">Iphone 6<br>
				  <input type="radio" name="produit" value="Iphone 5">Iphone 5<br>
				</div>
				<div class="produit-tel-samsung">
				  <input type="radio" name="produit" value="Samsung Galaxy 4">Samsung Galaxy 4<br>
				  <input type="radio" name="produit" value="Samsung Galaxy 5">Samsung Galaxy 5<br>
				</div>
				<div>
					<select name="produit[]">
						<option value=""></option>
					  <option value="1">First</option>
					  <option value="2">Second</option>
					  <option value="3">Third</option>
					</select>
				</div>
				<div>
					<select name="produit[]">
					<option value=""></option>
					  <option value="you">First</option>
					  <option value="hey">Second</option>
					  <option value="pouet">Third</option>
					</select>
				</div>
		  </div>
		  <input type="submit" value="valider">	
		</form>
	</div>
	
</body>
</html>