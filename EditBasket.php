<?php include("include/Head.php"); ?>
<div id="container">
    <?php include("include/Header.php"); ?>
    <?php include("include/nav.php"); ?>
    <?php

    include("include/Configuration.php");
    $RetFac = $bdd->query("select Name, IdF from faculty where IdF in(select IdF from course where IdC in(select IdC from choose where IdChoose = '".$_POST['item1']."' ))");
    while ($Fac = $RetFac->fetch())
       {
             $nameF = $Fac["Name"];
             $IdF = $Fac["IdF"];
    }

    $Univers = $bdd->query("select * from university where IdUnivers in(select IdUnivers from faculty where IdF = '".$IdF."' )");
    while ($Univer = $Univers->fetch())
       {
             $nameU = $Univer["Name"];
        }
        ?>
        <div class="ListwB">
        <h1>University : <?php echo $nameU; ?></h1>
        <h1>Faculty : <?php echo $nameF; ?></h1>
            <h1>Choose your courses</h1>
            <table>
                <tr>
                    <th>Course</th>
                    <th>Ects</th>                
                </tr>


<?php
//Get the number of the LA
$RetLA = $bdd->query("select * from choose where IdChoose = '".$_POST['item1']."'");
while ($NumLA = $RetLA->fetch())
    {
         $LA = $NumLA["NumberLA"];
    }

/*Display the courses*/

    $reponse = $bdd->query('SELECT * FROM course where IdF = "'.$IdF.'"'); 
    while ($data = $reponse->fetch())  
    {  
?>
    
<tr id = "<?php echo $data['IdC'];?>">
    <td><?php echo $data['Name'];?></td> 
    <td><?php echo $data['ECTS'];?></td>
    <td> 
        <form name="Description" method="post" action="Description.php">  
            <?php  echo '<input type="hidden" name="IdC" value="'.$data['IdC'].'">';  ?>
            <?php  echo '<input type="hidden" name="IdF" value="'.$_SESSION['IdF'].'">';  ?>
            <button class="myButton">Description</button>
        </form>
    </td>
    <td> 
        <button class="myButton" onclick = "add(<?php echo $data['IdC'];?>)">Add to the basket</button>
    </td>

</tr>


<?php
/*Display the basket*/
    }
?>
</table>
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
                        <?php 
//select course for basket
$total=0;
for($i=0; $i<$_POST['length']; $i++)
{
    $RetCourse = $bdd->query("select Name, ECTS, IdC from course where IdC in(select IdC from choose where IdChoose like '".$_POST['item'.$i]."' )");
    while ($Course = $RetCourse->fetch())
    {
         $name = $Course["Name"];
         $ects = $Course["ECTS"];
         $IdC = $Course["IdC"];
         $IdChoose = $_POST['item'.$i];
         $total = $total + $ects;
    }
    ?>
    
<tr id = "itemBaskest<?php echo $IdC;?>">
    <td><?php echo $name;?></td> 
    <td><?php echo $ects;?></td>
    <td> 
        <button class="myButton" onclick = "RemoveData(<?php echo $IdChoose;?>,<?php echo $IdC;?>)">Remove</button>
    </td>

</tr>


<?php

    }
?>

                    </table>
            </div>
            <button id="SaveBasket" class="myButton">Edit</button>
            <p>ECTS total : <span id="total"><?php echo $total;?></span></p>
    
        </div>


        <script type="text/javascript">
        let saveBasket = document.querySelector("#SaveBasket");

            function add(id){

                    var tr = document.createElement("tr");
                    idTr = "itemBaskest"+id;
                    var c = check(idTr);
                    if(c == false)
                    {
                        alert("You already choose this course")
                    }
                    else
                    {
                        tr.setAttribute("id", idTr);//we set the id to the row
                        var td1 = document.createElement("td");
                        var td2 = document.createElement("td");
                        var td3 = document.createElement("td");
                        var del = document.createElement("button");
                   

                        var name = document.getElementById(id).cells[0].innerHTML;
                        var ects = document.getElementById(id).cells[1].innerHTML;
                        td1.innerHTML=name;
                        td2.innerHTML=ects;
                        del.innerHTML = "Remove"; //we define the text on the button
                        del.setAttribute("onclick", "remove(" + idTr + ")");//we define the function of the button
                        td3.append(del);
                        tr.append(td1);
                        tr.append(td2);
                        tr.append(td3);
                        tr.className = "new";
                        document.getElementById("tabBasket").append(tr);

                        var total = document.getElementById("total");
                        var sum = total.innerHTML;
                        if(sum != '')
                        {
                            sum =parseInt(sum);
                            ects = parseInt(ects);
                            sum = ects + sum;
                        
                            
                        }
                        else{
                            sum = ects;
                        }
                        total.innerHTML= sum;
                    
                    }

                }

                function check(id){
                var ok = true;
                var table = document.getElementById('tabBasket');
                var rowLength = table.rows.length;
                for(var i=1; i<rowLength; i++){
                    var row = table.rows[i];
                    if(row.id == id)
                    {
                        
                        ok = false;
                        console.log(ok);
                    }

                }
            return ok;
            }

            function remove(tr){

                var ects = tr.cells[1].innerHTML;
                var total = document.getElementById("total");
                var sum = total.innerHTML;
                sum =parseInt(sum);
                ects = parseInt(ects);
                sum = sum - ects;
                total.innerHTML= sum;
                tr.parentNode.removeChild(tr);//we remove the row

            }

            function RemoveData(id,IdC){
                r = confirm('This item is registered in your Basket, if you delete, it will be permanantly deleted from your basket. Are you sure to delete this item?');
                if(r == true)
                {
                $.ajax({
                url: "deleteItem.php",
                type: "POST",
                data: { id: id },
                success: function(data) {
                    if (data == "success") {
                        var tr = document.getElementById("itemBaskest"+IdC);
                        console.log(tr);
                        remove(tr);
                    }
                    else {
                        alert("error");
                    }
                }
            });
            }
            
        }

            saveBasket.addEventListener("click", function(event) {
            event.preventDefault();

            var dataBasket = [];
            var headers = [];
            var allRows = document.getElementsByClassName('new');
            var i = allRows.length;
            while(i--) {
                 
                 var rowData = {};
                 var idD = allRows[i].id.match(/\d+/g).join('');
                 rowData["id"]=parseInt(idD);
                 dataBasket.push(rowData);
             }
             console.log(dataBasket);
            


            $.ajax({
                url: "saveEditBasket.php",
                type: "POST",
                data: { dataBasket: JSON.stringify( dataBasket ), LA: '<?php echo $LA?>' },
                success: function(data) {
                    if (data) {
                        alert("Your data have been updated");
                        document.location.href = "Basket.php";
                    } else {
                    alert("error");
                    }
                }
            });
        });



            </script>
    </div>
<?php include("include/footer.php"); ?>


					