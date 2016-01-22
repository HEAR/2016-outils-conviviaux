<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script type="text/javascript" src="jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div class="container">
		<?php
			$string = file_get_contents("entries.json");
			$json = json_decode($string);
			foreach ($json->items as $key=>$produit) { ?>
				<div class="produit">
					<h2><?php echo $key?></h2>
					<h2><?php echo $produit->nom; ?></h2>
					<h4><?php echo $produit->marques; ?></h4>
					<form id="get-fiche" action="get-fiche.php" method="POST">
						<input type="hidden" name="key" value="<?php echo $key?>"/>
						<a href='#'>Ton lien</a>
					</form>
				</div>
				
			<?php } ?>
	</div>
	
</body>
</html>