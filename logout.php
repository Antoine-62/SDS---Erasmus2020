<?php include("include/Head.php"); ?>
<?php
    session_destroy(); //Arret de la session
	header('Location:Index.php'); //Redirection vers l'accueil
?>	