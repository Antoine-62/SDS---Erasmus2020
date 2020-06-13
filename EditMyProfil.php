<?php include("include/Head.php"); 
include("include/Header.php"); 
include("include/nav.php");
include("include/Configuration.php");
$UserData = $bdd->prepare('SELECT * FROM user WHERE Username = ?');
$UserData->execute(array($_SESSION['Username']));
$User = $UserData->fetch();

?>
<div id="Profil">
    <form name="saveEditProfil" method="post" action="saveEditProfil.php">
        <h2> Edit my profil</h2>
        <label>First Name : </label><input type="text" name="FirstName" id="FirstName" value=<?php echo $User['FirstName']; ?> />
        <label>Last Name : </label><input type="text" name="LastName" id="LastName" value=<?php echo $User['Surname']; ?> /><br/><br/>
        <label>Nationality : </label><input type="text" name="Nationality" id="Nationality" value=<?php echo $User['Nationality']; ?> /> <br/><br/>
        <label>Birthdate : </label><input type="date" name="BirthDate" id="BirthDate" value=<?php echo $User['DateOfBirth']; ?> /> <br/><br/>
        <label>Gender : </label><input type="radio" name="Sex" id="Sex" value="M" <?php if($User['Sex'] == "M"){ echo "checked=checked";}?> /> Male
                                <input type="radio" name="Sex" id="Sex" value="F" <?php if($User['Sex'] == "F"){ echo "checked=checked";}?> />Female <br/><br/>
        <label>Study cycle : </label><input type="radio" name="StudyCycle" id="StudyCycle" value="Bachelor" <?php if($User['StudyCycle'] == "Bachelor") {echo "checked=checked"; }?> /> Bachelor
                                    <input type="radio" name="StudyCycle" id="StudyCycle" value="Master" <?php if($User['StudyCycle'] == "Master") {echo "checked=checked"; }?> /> Master
                                    <input type="radio" name="StudyCycle" id="StudyCycle" value="Doctoral" <?php if($User['StudyCycle'] == "Doctoral") {echo "checked=checked"; }?> /> Doctoral<br/><br/>         
        <label>Field of education : </label><input type="text" name="FieldOfEducation" id="FieldOfEducation" value=<?php echo $User['Nationality']; ?> /> <br/><br/>
        <label>Email : </label><input type="email" name="Email" id="Email" value=<?php echo $User['Email']; ?> /> <br/><br/>
        <label>Phone number :  </label><input type="text" name="Phone" id="Phone" value=<?php echo $User['Phone']; ?> /><br/><br/>             
        <button class="myButton">Edit my profil</button>
    </form>
</div>
<?php include("include/footer.php"); ?>