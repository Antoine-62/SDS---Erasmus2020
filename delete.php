<?php 
 $bdd = new PDO('mysql:host=localhost:3308;dbname=cela','root','');

$id = $_POST['id'];

$recup = $bdd->prepare('DELETE FROM university where IdUnivers =?');
$recup->execute(array($id));
echo 1;
