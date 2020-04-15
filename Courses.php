<?php include("include/Head.php"); ?>
<div id="container">
<?php include("include/Header.php"); ?>
<?php include("include/nav.php"); ?>

<div class="ListwB">
    <h1>Choose your courses</h1>
    <table>
                <tr>
                    <th>Course</th>
                    <th>Ects</th>                
                </tr>
    <?php 
                include("include/Configuration.php");
				$reponse = $bdd->query('SELECT * FROM course where IdF = "'.$_POST['faculty'].'"'); 
				while ($data = $reponse->fetch())  
				{  
			?>
					
                <tr id = "<?php echo $data['IdC'];?>">
                    <td><?php echo $data['Name'];?></td> 
                    <td><?php echo $data['ECTS'];?></td>
                    <td> 
                        <button class="myButton" onclick = "add(<?php echo $data['IdC'];?>)">Add to the basket</button>
                    </td>
                
                </tr>
				
                
				<?php
               
				}
			?></table>
</div>
<div class="Basket">
<div class="Bask">
    <h1>Here your basket</h1>
    <table id='tabBasket'>
         <tr>
            <th>Course</th>
            <th>Ects</th>  
            <th>Remove</th>              
        </tr>
    </table>
    </div>
        <button class="myButton">Save</button><button class="myButton">Download Learning Agreement</button><p>ECTS total :</p>
    
</div>

<script type="text/javascript">
    function add(id){
        var tr = document.createElement("tr");
                    var td1 = document.createElement("td");
                    var td2 = document.createElement("td");
                    var name = document.getElementById(id).cells[0].innerHTML;
                    var ects = document.getElementById(id).cells[1].innerHTML;
                    td1.innerHTML=name;
                    td2.innerHTML=ects;
                    tr.append(td1);
                    tr.append(td2);
                    document.getElementById("tabBasket").append(tr);
    }
   

</script>
</div>
