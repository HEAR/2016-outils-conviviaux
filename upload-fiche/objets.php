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
			foreach ($json->items as $produit) { ?>
				<div class="produit">
					<h2><?php echo $produit->nom; ?></h2>
					<h4><?php echo $produit->marques; ?></h4>
				</div>
				
			<?php } ?>
	</div>
	
</body>
</html>