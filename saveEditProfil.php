<?php 
include("include/Head.php");
include("include/Configuration.php");
$req = $bdd->prepare('UPDATE user set FirstName = :firstName, Surname= :surname, DateOfBirth= :DateOfBirth, Nationality= :Nationality, Sex= :Sex, StudyCycle= :StudyCycle, FieldOfEducation= :FieldOfEducation, Email= :Email, Phone= :Phone where Username = :Username');
   
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Nationality = $_POST['Nationality'];
$BirthDate = DateTime::createFromFormat('Y-m-d', $_POST['BirthDate']);
$Sex = $_POST['Sex'];
$StudyCycle = $_POST['StudyCycle'];
$FieldOfEducation = $_POST['FieldOfEducation'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];


if(!
    $req->execute(array(
        'firstName' => $FirstName,
        'surname' => $LastName,
        'DateOfBirth' => $BirthDate->format('Y-m-d'),
        'Nationality' => $Nationality,
        'Sex' => $Sex,
        'StudyCycle' => $StudyCycle,
        'FieldOfEducation' => $FieldOfEducation,
        'Email' => $Email,
        'Phone'=> $Phone,
        'Username' => $_SESSION['Username']
    )))
{
    print_r($req->errorInfo());
}

    
header('Location:MyProfil.php');
die();
    


?>