<?php
include("include/Head.php");
include("include/Configuration.php");
$idComment = $_POST['idComment'];
$sql= "DELETE FROM comment where idCom = '".$idComment."'";
if($bdd->query($sql))
{
    echo "success";
    header('Location:Description.php');
    die();
}
else
{
    echo "error";
}

?>