<!DOCTYPE HTML>

<html>
	<head>
		<meta charset = "utf-8"/>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<link rel = "stylesheet" href = "style.css"/>
		<title>CELA</title>
	</head>
	<body>
    <header>
			<img class="log" src="image/logo2.png" alt="logo" />
			<div id="titre">Create your Learning agreement with CELA</div> 
</header>

<section class = "standard">
	<h2> Universities List </h2>
	<table>
                <tr>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Contact Name</th>
					<th>Emain</th>
					<th>Phone</th>                    
                </tr>
    <?php 
                $bdd = new PDO('mysql:host=localhost:3308;dbname=cela','root','');
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
                    <td> <button onclick="edit(<?php echo $data['IdUnivers'];?>)">Edit</button></td>
                    <td><button class='delete' id='<?php echo $data['IdUnivers'];?>'>Remove</button></td>
                </tr>
				
                
				<?php
               
				}
			?></table>
      <h1>Create a table</h1>
      <form name="connection" method="post" action="create.php">
					University : <input type="text" name="univ" required="Veuillez remplir ce champ"/><br/><br/>
			
					<input type="submit" name="valider"/>
				</form>

        <h1>Update contact of idUnivers=9</h1>
      <form name="connection" method="post" action="update.php">
					Contact : <input type="text" name="univ" required="Veuillez remplir ce champ"/><br/><br/>
			
					<input type="submit" name="valider"/>
				</form>
</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>

$(document).ready(function(){

// Delete 
$('.delete').click(function(){
  var el = this;
  var id = this.id;

  // AJAX Request
  $.ajax({
    url: 'delete.php',
    type: 'POST',
    data: { id:id },
    success: function(response){

      if(response == 1){
    // Remove row from HTML Table
    $(el).closest('tr').css('background','tomato');
    $(el).closest('tr').fadeOut(800,function(){
       $(this).remove();
    });
     }else{
    alert('Invalid ID.'+id);
     }

   }
  });

});

});
function remove(id)
                  {
                    $.ajax({
                         url: 'delete.php',
                         type: 'DELETE',
                           success: function(result) {
                            var tr = document.getElementById(id);//we select the row we want to remove
                            tr.parentNode.removeChild(tr);//we remove the row
                          }
                        });
                        
                   }
                </script>
