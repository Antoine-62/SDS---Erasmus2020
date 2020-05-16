<?php
include("include/Head.php"); 
include("include/Configuration.php");
$user = $bdd->query("select id from user where Username like ".$_SESSION['Username']."");
$userId = $user->fetch();
    $NumberLA=$bdd->query("select max(NumberLA) as max from choose");
            while ($Number = $NumberLA->fetch())
            {
                $LA = $Number["max"]+1;
            }
  $decoded = json_decode($_POST['dataBasket'],true);
  //print_r($decoded);
foreach ($decoded as $value) {
    $sql = "INSERT INTO choose (NumberLA, IdU, IdC) VALUES ('".$LA."','".$userId["id"]."','".$value["id"]."')";
    $bdd->query($sql);
}
echo "success";

?>