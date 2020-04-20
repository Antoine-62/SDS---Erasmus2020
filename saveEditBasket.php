<?php
include("include/Configuration.php");
  $decoded = json_decode($_POST['dataBasket'],true);
  //print_r($decoded);
foreach ($decoded as $value) {
    $sql = "INSERT INTO choose (NumberLA, IdU, IdC) VALUES ('".$_POST['LA']."','1','".$value["id"]."')";
    $bdd->query($sql);
}
echo "success";
?>