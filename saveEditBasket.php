<?php
include("include/Head.php"); 
include("include/Configuration.php");
$UserData = $bdd->prepare('SELECT idU FROM user where Username = ? '); 
$UserData->execute(array($_SESSION['Username']));
$userId = $UserData->fetch();
  $decoded = json_decode($_POST['dataBasket'],true);
  //print_r($decoded);
foreach ($decoded as $value) {
    $sql = "INSERT INTO choose (NumberLA, IdU, IdC) VALUES ('".$_POST['LA']."','".$userId["idU"]."','".$value["id"]."')";
    $bdd->query($sql);
}
echo "success";
?>