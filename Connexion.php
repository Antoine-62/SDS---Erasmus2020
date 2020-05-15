<?php include("include/Head.php"); ?>
<?php 
include("include/Configuration.php");

$req = $bdd->prepare('SELECT * FROM user WHERE Username = :Username');
$req->execute(array(
    'Username' => $_POST['Username'],

	));
$resultat = $req->fetch();
$isPasswordCorrect = password_verify($_POST['password'], $resultat['pwd']);


if (!$resultat)
{	
    echo "invalid Username or Password";
    die();

}

else
{
    if ($isPasswordCorrect) {
        $_SESSION['Username']=$_POST['Username']; //Permet de récupérer l'identifiant de l'utilisateur pour sa session
       // echo $_SESSION['Username'];
        header('Location:Index.php'); //Redirige vers l'accueil
       echo 'success';
       die();
    }
    else {
        echo "invalid Username or Password";
        die();
	
    }

}
?>	