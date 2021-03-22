<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  
	Étape 1: utilisez une fonction mathématique prédéfinie ici et faites-en écho

	Étape 2: utilisez une fonction de chaîne prédéfinie ici et faites-en écho

	Étape 3: Utilisez une fonction Array prédéfinie ici et faites-en écho 

 */
$x=18.4542215;
echo round($x,2);


$str="hiba ";
echo strlen($str); 
echo strtoupper($str);
echo substr($str,1,3);






$input_array = array("frist" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER)); // CASE_LOWER






	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>