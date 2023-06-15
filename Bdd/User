<?php session_start(); ?>
<html>
<form method="post">
	<input type="text" name="nom">
	<input type="submit" value="envoyer">
</form>
<?php
if(!empty($_POST['nom'])){
	if($_POST['nom'] == "logout"){
		session_destroy();
	} else {
		$_SESSION['data'] = $_POST['nom'];
	}
}
if(!empty($_SESSION)) print_r($_SESSION);
if(!empty($_POST)) print_r($_POST);
?>

</html>