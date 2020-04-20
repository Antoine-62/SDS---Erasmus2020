<?php
include("include/Configuration.php");
  

    $sql = "INSERT INTO university (Name, ErasmusCode, Address, Country, Email, Phone) VALUES ('".$_POST['univ']."','bla','blabla','somewhere','blabla','0123456789')";
    $bdd->query($sql);
    header('location: CRUD.php');
    exit();

?>