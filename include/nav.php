<?php
if(isset($_SESSION['Username']))
{
    ?>
    <nav>
        <ul>	
        <li><a href = "Universities.php">Universities List</a> </li>
        <li><a href = "Basket.php">My Baskets</a></li>		
        <div class = "IRight">		
            <li><a href = "MyProfil.php">My profil</a></li>	
            <li><a href = "logout.php">Sign out</a></li>	
        </div>			
    </ul> 
    </nav>
<?php
}

else
{
    ?>
    <nav>
        <ul>	
        <li><a href = "Index.php">Welcome</a> </li>
        <div class = "IRight">		
            <li><a href = "login.php">Sign in</a></li>	
            <li><a href = "SignUp.php">Sign Up</a></li>	
        </div>			
    </ul> 
    </nav>
    <?php
} 

?>


