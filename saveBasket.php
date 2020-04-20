<?php
include("include/Configuration.php");
    $NumberLA=$bdd->query("select max(NumberLA) as max from choose");
            while ($Number = $NumberLA->fetch())
            {
                $LA = $Number["max"]+1;
            }
  $decoded = json_decode($_POST['dataBasket'],true);
  //print_r($decoded);
foreach ($decoded as $value) {
    $sql = "INSERT INTO choose (NumberLA, IdU, IdC) VALUES ('".$LA."','1','".$value["id"]."')";
    $bdd->query($sql);
}
echo "success";

?>