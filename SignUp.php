<?php include("include/Head.php"); ?>
<script src="Javascript/Registration.js"></script>
<div id="container">
    <?php include("include/Header.php"); ?>
    <?php include("include/nav.php"); ?>
        <div class = "registration"> 
            <h1> Sign up </h1> <br/>
            <p> Please, fill in the form</p>
            <form id="Registration" method="post" action="Registration.php">
                <label>First Name : </label><input type="text" name="FirstName" id="FirstName" required="Fist name"/>
                <label>Last Name : </label><input type="text" name="LastName" id="LastName" required="LastName"/><br/><br/>
                <label>Username : </label><input type="text" name="Username" id="Username" required="Username"/><br/><br/>
                <label>Nationality : </label><input type="text" name="Nationality" id="Nationality" required="Nationality"> <br/><br/>
                <label>Birthdate : </label><input type="date" name="BirthDate" id="BirthDate" required=""> <br/><br/>
                <label>Gender : </label><input type="radio" name="Sex" id="Sex" value="M" checked> Male
                                         <input type="radio" name="Sex" id="Sex" value="F">Female <br/><br/>
                <label>You are : </label><input type="radio" name="Rigth" id="Rigth" value="1" checked> Student
                                         <input type="radio" name="Rigth" id="Rigth" value="2"> Erasmus Coordinator <br/><br/>
                <label>Study cycle : </label><input type="radio" name="StudyCycle" id="StudyCycle" value="Bachelor" checked> Bachelor
                                         <input type="radio" name="StudyCycle" id="StudyCycle" value="Master"> Master
                                         <input type="radio" name="StudyCycle" id="StudyCycle" value="Doctoral"> Doctoral
                                         <input type="radio" name="StudyCycle" id="StudyCycle" value="Teacher"> Teacher (Erasmus Coordinator) <br/><br/>         
                <label>Field of education : </label><input type="text" name="FieldOfEducation" id="FieldOfEducation" required="Field Of Education"> <br/><br/>
                <label>Email : </label><input type="email" name="Email" id="Email" required="Email"> <br/><br/>
                <label>Phone number :  </label><input type="text" name="Phone" id="Phone" required="Phone"/><br/><br/>
                <label> Password : </label><input type="password" name="Pwd" id="Pwd" required="Password"/>
                <p>The password must contains at least 6 charaters, including letters and numbers</p><br/> 
                <label for="cmdp">Please, confirm your password : </label><input type="password" name="Cpwd" id="Cpwd" required="Confirm your password"/>><br/><br/>
                            
                <input type="submit" value="Sign up!"/>
            </form>
        </div>
</div>