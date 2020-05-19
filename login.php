<?php include("include/Head.php"); ?>
<script src="Javascript/Login.js"></script>
<?php include("include/Header.php"); ?>
    <?php include("include/nav.php"); ?>
<h1> Connexion </h1> <br/>
<form id="login" name="login" method="post" action="Connexion.php">
		Username : <input type="text" id="Username" name="Username" required="Username"/><br/><br/>
		Password : <input type="password" id="password" name="password" required="Password"/><br/><br/>
        <input type="submit" name="valider" value="Se connecter"/>
</form>