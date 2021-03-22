
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  
	Étape 1: Créez un formulaire qui soumet une seule valeur à POST (super global)
 */
echo"your user name is".$post["user"];
echo"your password is".$post["password"];



	
?>

<form action ="name.php"method="post">
  Name: <input type="text" name="fname">
  password: <input type="text" name="pass">
  <input type="submit">
</form>
