<?php 
 include("include/Head.php"); ?>
    <?php 
    include("include/Header.php");
    include("include/nav.php");
    ?>

<div>
<h1 class="whereFrom">User List</h1>
<div class="List">
    <table>
        <tr>
            <th>Username</th>
            <th>First Name</th>    
            <th>Last Name</th>    
            <th>Nationality</th>    
            <th>Status</th>  
            <th>Study cycle</th>    
        </tr>
        <?php
        include("include/Configuration.php");

        $UserList = $bdd->query('SELECT * FROM user');
        while ($User = $UserList->fetch())
        {
            ?>
            <tr>
                <td><?php echo $User['Username'] ?></td>
                <td><?php echo $User['FirstName'] ?></td>    
                <td><?php echo $User['Surname'] ?></td>    
                <td><?php echo $User['Nationality'] ?></td>    
                <td><?php
                        if($User['status'] == 1)
                        { echo "Student";}
                         
                        if($User['status'] == 2)
                        { echo "Erasmus Coordiantor";}
                        
                        if($User['status'] == 3)
                        { echo "Administrator";}
                        ?></td>  
                <td><?php echo $User['StudyCycle'] ?></td>  
                <td><form name="EditMyProfil" method="post" action="DeleteUser.php">
                        <input type="hidden" name="IdU" value=<?php echo $User['IdU'] ?>>
                        <button class="myButton">Delete this user</button>
                    </form>
                </td>  
            </tr>
            <?php
        }
        ?>
        </table>
</div>
</div>
<?php include("include/footer.php"); ?>