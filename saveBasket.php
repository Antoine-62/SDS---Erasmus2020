<?php
include("include/Head.php"); 
include("include/Configuration.php");
$UserData = $bdd->prepare('SELECT idU FROM user where Username = ? '); 
$UserData->execute(array($_SESSION['Username']));
$userId = $UserData->fetch();
$NumberL=$bdd->prepare('select max(NumberLA) as max from choose where idU = ?');
$NumberL->execute(array($userId["idU"]));
$NumberLA=$NumberL->fetch();
           
$LA = $NumberLA["max"]+1;

  $decoded = json_decode($_POST['dataBasket'],true);
  //print_r($decoded);
foreach ($decoded as $value) {
    $sql = "INSERT INTO choose (NumberLA, IdU, IdC) VALUES ('".$LA."','".$userId["idU"]."','".$value["id"]."')";
    $bdd->query($sql);
}
echo "success";
?>