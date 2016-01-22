$(document).ready(function(){
	$(".produit a").click(function(e){
		e.preventDefault();
		$(this).parent('#get-fiche').submit();
		console.log("youhou");
	});
});