<?php include("include/Head.php"); 
include("include/Header.php"); 
include("include/nav.php");
include("include/Configuration.php");
$UserData = $bdd->prepare('SELECT * FROM user WHERE Username = ?');
$UserData->execute(array($_SESSION['Username']));
$User = $UserData->fetch()
?>
<div id="Profil">
	<h1 class="whereFrom"> Profile of : <?php echo $_SESSION['Username']; ?> </h1>
	<div class="profile">
		<p><strong> First Name : </strong><?php echo $User['FirstName']; ?> </p>
		<p><strong> Last Name : </strong><?php echo $User['Surname']; ?> </p>
		<p><strong> Nationality : </strong><?php echo $User['Nationality']; ?></p>
		<p><strong> Birthdate : </strong><?php echo $User['DateOfBirth']; ?></p>
		<p><strong> Gender :</strong> <?php echo $User['Sex']; ?></p>
        <p><strong> Study cycle :</strong> <?php echo $User['StudyCycle']; ?></p>
		<p><strong> Field of education : </strong><?php echo $User['FieldOfEducation']; ?></p>
		<p><strong> Email : </strong><?php echo $User['Email']; ?></p>
        <p><strong> Phone number : </strong><?php echo $User['Phone']; ?></p>
    </ul>
    <form name="EditMyProfil" method="post" action="EditMyProfil.php">
        <button class="myButton">Edit my profil</button>
	</form>
</div>
</div>
<?php include("include/footer.php"); ?>