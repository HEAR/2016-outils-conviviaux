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
		<?php 
			$string = file_get_contents("entries.json");

			$json = json_decode($string);
			$key = $_POST['key'];
			$produit = $json->items[$key];
			?>


			<div class="cat">
				<h2><?php echo $produit->categories; ?></h2>
			</div>
			<div class="sub-cat">
				<h2><?php echo $produit->souscategories; ?></h2>
			</div>
				<div class="marques">
					<h2><?php echo $produit->marques; ?></h2>
				</div>
				<div class="produit">
					<h2><?php echo $produit->nom; ?></h2>
				</div>
	</div>

</body>
</html>