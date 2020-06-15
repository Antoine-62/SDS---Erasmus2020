<?php include("include/Head.php"); ?>
<?php include("include/Header.php"); ?>
<?php include("include/nav.php"); ?>

<h1 class="whereFrom">Universities List</h1>
<div class="List">
    <table>
                <tr>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Contact Name</th>
					<th>Email</th>
					<th>Phone</th>                    
                </tr>
    <?php 
                include("include/Configuration.php");
				$reponse = $bdd->query('SELECT * FROM university'); 
				while ($data = $reponse->fetch())  
				{  
			?>
					
                <tr>
                    <td><?php echo $data['Name'];?></td> 
                    <td><?php echo $data['Country'];?></td>
					<td> <?php echo $data['ContactName'];?></td> 
                    <td><?php echo $data['Email'];?></td>
					<td><?php echo $data['Phone'];?></td> 
                    <td> 
                        <form name="university" method="post" action="Faculties.php">
                            <button class="myButton" name=university value = <?php echo $data['IdUnivers'];?>>List Faculties availables</button>
                        </form>
                    </td>
                
                </tr>
				
                
				<?php
               
				}
			?></table>
</div>
<?php include("include/footer.php"); ?>