<?php 
 include("include/Head.php"); ?>
<div id="containerl">
    <?php include("include/Header.php"); ?>
    <?php include("include/nav.php"); ?>
    <?php 
        include("include/Configuration.php");
        if(isset($_POST['faculty']))
        {
            $_SESSION['IdF']=$_POST['faculty'];
        }
        if(isset($_SESSION['IdF']))
        {
            $Univers = $bdd->query('SELECT * FROM university where IdUnivers in(select IdUnivers from faculty where IdF = "'.$_SESSION['IdF'].'")');
            
            while ($Univer = $Univers->fetch())
            {
                $nameUniv = $Univer['Name'];
            } 
            $Facs =  $bdd->query('SELECT * FROM faculty where IdF = "'.$_SESSION['IdF'].'"');
            while ($Fac = $Facs->fetch())
            {
                $nameFac = $Fac['Name'];
            } 
            ?>
            <h1 class="whereFrom"><?php echo $nameUniv;?> - <?php echo $nameFac;?> - Choose your courses</h1>
            <div class="ListwB">
                <table>
                    <tr>
                        <th>Course</th>
                        <th>Ects</th>                
                    </tr>
                    <?php 
                        include("include/Configuration.php");
                        $reponse = $bdd->query('SELECT * FROM course where IdF = "'.$_SESSION['IdF'].'"'); 
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
                        </table>
                </div>
                <button id="SaveBasket" class="myButton">Save</button>
                <p>ECTS total : <span id="total"></span></p>
        
            </div>
        <?php
        }
        else{
            echo "You didn't select any Faculties.";
        }
        ?>

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
                        del.classList.add("myButton")
                        del.setAttribute("onclick", "remove(" + idTr + ")");//we define the function of the button
                        td3.append(del);
                        tr.append(td1);
                        tr.append(td2);
                        tr.append(td3);
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

            saveBasket.addEventListener("click", function(event) {
            event.preventDefault();

            var dataBasket = [];
            var headers = [];
            var table = document.getElementById('tabBasket');
                var rowLength = table.rows.length;
              /*  for (var i=0; i<table.rows[0].cells.length-1; i++) {
                     headers[i] = table.rows[0].cells[i].innerHTML.toLowerCase().replace(/ /gi,'');
                }*/

                // go through cells
                for (var i=1; i<rowLength; i++) {
                     var tableRow = table.rows[i];
                     var rowData = {};
                     var idD = tableRow.id.match(/\d+/g).join('');
                     console.log(idD);
                     rowData["id"]=parseInt(idD);
                       /* for (var j=0; j<tableRow.cells.length-1; j++) {
                            rowData[ headers[j] ] = tableRow.cells[j].innerHTML;
                        } */
                        dataBasket.push(rowData);
                    }

            $.ajax({
                url: "saveBasket.php",
                type: "POST",
                data: { dataBasket: JSON.stringify( dataBasket ) },
                success: function(data) {
                   
                    if (data) {
                        alert("Your basket have been registered - You'll be directed to your basket section");
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
