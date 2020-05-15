<?php 
include("include/Configuration.php");
$req = $bdd->prepare('INSERT INTO user(Username, FirstName, Surname, DateOfBirth, Nationality, Sex, StudyCycle, FieldOfEducation, status, Email, pwd, Phone) VALUES (:username, :firstName, :surname, :DateOfBirth, :Nationality, :Sex, :StudyCycle, :FieldOfEducation, :Right, :Email, :pwd, :Phone)');
   
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Username = $_POST['Username'];
$Nationality = $_POST['Nationality'];
$BirthDate = DateTime::createFromFormat('Y-m-d', $_POST['BirthDate']);
$Sex = $_POST['Sex'];
$StudyCycle = $_POST['StudyCycle'];
$FieldOfEducation = $_POST['FieldOfEducation'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$password = $_POST['Pwd'];
$Rigth= $_POST['Rigth'];

echo $FirstName ."-".$LastName."-".$Username."-".$Nationality."-".$_POST['BirthDate']."-".$Sex."-".$StudyCycle."-".$FieldOfEducation."-".$Email."-".$Phone."-".$password."-".$Rigth;

$password_encrypted = password_hash($password, PASSWORD_DEFAULT);

if(!
    $req->execute(array(
        'username' => $Username,
        'firstName' => $FirstName,
        'surname' => $LastName,
        'DateOfBirth' => $BirthDate->format('Y-m-d'),
        'Nationality' => $Nationality,
        'Sex' => $Sex,
        'StudyCycle' => $StudyCycle,
        'FieldOfEducation' => $FieldOfEducation,
        'Right' => $Rigth,
        'Email' => $Email,
        'pwd'=> $password_encrypted,
        'Phone'=> $Phone,
    )))
{
    print_r($req->errorInfo());
}

    
        echo "success";
    


?>
