<?php include("include/Head.php"); 
include("include/Header.php"); 
include("include/nav.php");
include("include/Configuration.php");
$UserData = $bdd->prepare('SELECT * FROM user WHERE Username = ?');
$UserData->execute(array($_SESSION['Username']));
$User = $UserData->fetch()
?>
<div id="Profil">
    <h2> Profil of : <?php echo $_SESSION['Username']; ?> </h2>
	<ul>
		<li> First Name : <?php echo $User['FirstName']; ?> </li>
		<li> Last Name : <?php echo $User['Surname']; ?> </li>
		<li> Nationality : <?php echo $User['DateOfBirth']; ?></li>
		<li> Birthdate : <?php echo $User['Nationality']; ?></li>
		<li> Gender : <?php echo $User['Sex']; ?></li>
        <li> Study cycle : <?php echo $User['StudyCycle']; ?></li>
		<li> Field of education : <?php echo $User['FieldOfEducation']; ?></li>
		<li> Email : <?php echo $User['Email']; ?></li>
        <li> Phone number : <?php echo $User['Phone']; ?></li>
    </ul>
    <form name="EditMyProfil" method="post" action="EditMyProfil.php">
        <button class="myButton">Edit my profil</button>
    </form>
</div>