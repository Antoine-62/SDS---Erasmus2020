<?php
include("include/Configuration.php");

$sql= "DELETE FROM choose where IdChoose = '".$_POST['id']."'";
if($bdd->query($sql))
{
    echo "success";
}
else
{
    echo "error";
}

?>