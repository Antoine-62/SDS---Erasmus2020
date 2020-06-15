<?php
 include("include/Head.php");
include("include/Configuration.php");
$idU = $_POST['IdU'];
$sql= "DELETE FROM choose where IdU = '".$idU."'";
if($bdd->query($sql))
{
    echo "success";
}
$sql= "DELETE FROM comment where IdU = '".$idU."'";
if($bdd->query($sql))
{
    echo "success";
}
$sql= "DELETE FROM user where IdU = '".$idU."'";
if($bdd->query($sql))
{
    echo "success";
    header('Location:UserList.php');
}
else
{
    echo "error";
}

?>