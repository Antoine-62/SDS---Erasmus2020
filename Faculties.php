<?php include("include/Head.php"); ?>
<?php include("include/Header.php"); ?>
<?php include("include/nav.php"); ?>
<?php 
    include("include/Configuration.php");
    $Unvivers = $bdd->query('SELECT * FROM university where IdUnivers = "'.$_POST['university'].'"'); 
    while ($Unviver = $Unvivers->fetch())  
    {
        $univName = $Unviver['Name'];
    }
	?>
<div class="List">
    <h1>University : <?php echo $univName;?></h1>
    <h1>Choose your faculties</h1>
    <table>
                <tr>
                    <th>Name of the faculty</th>
                    <th>Erasmus Coordinator</th>
					<th>Email</th>
					<th>Phone</th>                    
                </tr>
    <?php 
                
				$reponse = $bdd->query('SELECT * FROM faculty where IdUnivers = "'.$_POST['university'].'"'); 
				while ($data = $reponse->fetch())  
				{  
			?>
					
                <tr>
                    <td><?php echo $data['Name'];?></td> 
                    <td><?php echo $data['Coordinator'];?></td>
                    <td><?php echo $data['Email'];?></td>
					<td><?php echo $data['Phone'];?></td> 
                    <td> 
                        <form name="faculty" method="post" action="Courses.php">
                            <button class="myButton" name="faculty" value = <?php echo $data['IdF'];?>>List courses availables</button>
                        </form>
                    </td>
                
                </tr>
				
                
				<?php
               
				}
			?></table>
</div>
<?php include("include/footer.php"); ?>