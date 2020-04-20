<?php
include("include/Configuration.php");
$sql= "DELETE FROM choose where NumberLA = '".$_POST['LA']."'";


if($bdd->query($sql))
{
   // echo "success";
    header('location: Basket.php');
    exit();
}
else
{
    echo "error";
}
?>