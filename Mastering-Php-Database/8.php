<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  

	/*  
	Étape 1 - Créer une variable avec du text comme valeur

	Étape 2 - Utilisez la fonction crypt() pour le crypter

	Étape 3 - Attribuez le résultat de cryptage à une variable

	Étape 4 - Échoyez de la variable 
	*/
	$txt = "Hello world!";
    //2 
   crypt($txt,'hiba') ;
   // 3 
   $c = crypt($txt,'hiba');
   // 4 
   echo $c;



	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>