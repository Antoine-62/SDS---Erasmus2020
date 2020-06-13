<?php
session_start();
include("include/Configuration.php");
$UserData = $bdd->prepare('SELECT IdU FROM user where Username = ? '); 
$UserData->execute(array($_SESSION['Username']));
$userId = $UserData->fetch();
$req = $bdd->prepare('INSERT INTO comment(comment, PublicationDate, PublicationTime, IdU, IdC) VALUES (:comment, :dat, :tim, :idu, :idc)');


$comment = $_POST['comment'];
$idc=$_SESSION['IdC'];
date_default_timezone_set('Europe/Paris');
$Date = date("Y/m/d");
$Time = date("h:i:sa");

if(!$req->execute(array(
        'comment' => $comment,
        'dat' => $Date,
        'tim' => $Time,
        'idu' => $userId['IdU'],
        'idc' => $idc
    )))
{
    print_r($req->errorInfo());
}

else{
    echo "ok";
}

?>