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
		// check if a form was submitted
		if( !empty( $_POST ) ){

		// convert form data to json format
		    $postArray = array(
	    		"nom" => $_POST['produit'],
		      "categories" => $_POST['categories'],
		      "sous-categories" => $_POST['sous-categories'],
		      "marques" => $_POST['marques'],
		    );

		// $json = json_encode(array('item' => $postArray), JSON_FORCE_OBJECT);
		$file = 'entries.json';
		// // write to file
		// file_put_contents( $file, $json, FILE_APPEND);

		$string = file_get_contents($file);
		$json = json_decode($string, true);
		array_push($json['items'], $postArray);
		$jsonStr = json_encode($json);
		//print_r($jsonStr);
		file_put_contents( $file, $jsonStr);
		}?>
	<div class="container">
		<div class="cat">
			<h2><?php echo $_POST['categories']; ?></h2>
		</div>
		<div class="sub-cat">
			<h2><?php echo $_POST['sous-categories']; ?></h2>
		</div>
		<?php if(!empty($_POST["marques"])){?>
			<div class="marques">
				<h2><?php echo $_POST['marques']; ?></h2>
			</div>
		<?php } ?>
			<div class="produit">
			<?php foreach($_POST['produit'] as $produit){?>
				<h2><?php echo $produit; ?></h2>
			<?php } ?>
			</div>
	</div>

</body>
</html>