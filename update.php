<?php
include("include/Configuration.php");
  

    $sql = "UPDATE university set ContactName = '".$_POST['univ']."' where IdUnivers = '9'";
    $bdd->query($sql);
    header('location: CRUD.php');
    exit();

?>