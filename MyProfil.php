<?php include("include/Head.php"); 
include("include/Header.php"); 
include("include/nav.php");
$UserData = $bdd->prepare('SELECT * FROM user WHERE Username = ?');
$UserData->execute(array($_SESSION['Username']));
$User = $UserData->fetch()
?>
<div id="Profil">
<h2> Profil of : <?php echo $_SESSION['Username']; ?> </h2>
	<ul>
		<li> First Name : <?php echo $rec['FirstName']; ?> </li>
		<li> Last Name : <?php echo $rec['Surname']; ?> </li>
		<li> Nationality : <?php echo $rec['DateOfBirth']; ?></li>
		<li> Birthdate : <?php echo $rec['Nationality']; ?></li>
		<li> Gender : <?php echo $rec['Sex']; ?></li>
        <li> Study cycle : <?php echo $rec['StudyCycle']; ?></li>
		<li> Field of education : <?php echo $rec['FieldOfEducation']; ?></li>
		<li> Email : <?php echo $rec['Email']; ?></li>
        <li> Phone number : <?php echo $rec['Phone']; ?></li>
    </ul>