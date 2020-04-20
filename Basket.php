<?php include("include/Head.php"); ?>
<div id="container">
    <?php include("include/Header.php"); ?>
    <?php include("include/nav.php");?>

    <div class="List">
    <h1>Your Baskets</h1>
    <?php
    include("include/Configuration.php");
        $reponse = $bdd->query('SELECT * FROM choose  order by NumberLA'); 
        $permut=0;
        $counter=0;
        $ectsTot =0;
        $idChoose=array();


        while ($data = $reponse->fetch())  
		{
            $Course = $bdd->query('SELECT * FROM course WHERE IdC ='.$data['IdC'].''); 
            while ($rowCourse = $Course->fetch())
            {
                $name = $rowCourse["Name"];
                $ects = $rowCourse["ECTS"];
                $IdC=$rowCourse["IdC"];
            }
            if($permut == 0)
            { 
                $Univ = $bdd->query("select * from university where IdUnivers in(select IdUnivers from faculty where IdF in (select IdF from course where IdC  = '".$IdC."'))");
                while ($Uni = $Univ->fetch())
                {
                    $nameUnivers = $Uni["Name"];
                }
                $Facs = $bdd->query("select * from faculty where IdF in(select IdF from course where IdC  = '".$IdC."' )");
                while ($Fac = $Facs->fetch())
                {
                    $nameFac = $Fac["Name"];
                }
                $permut = $data['NumberLA']; 
                $ectsTot=$ects;
            ?>
                </div>
                <div class="Basket2">
                <div class="Bask">
                    <h1>Here your basket <?php echo $data['NumberLA']?></h1>
                    <h2>University : <?php echo $nameUnivers ?></h2>
                    <h2>Faculty : <?php echo $nameFac ?></h2>
                        <table id='tabBasket'>
                            <tr>
                                <th>Course</th>
                                <th>Ects</th>  
                            </tr>
                            <tr>
                                <td><?php echo $name;?></td> 
                                <td><?php echo $ects;?></td>
                
                             </tr>
            <?php                 
            }  
            
            else if($data['NumberLA'] != $permut)
            {
                $permut = $data['NumberLA']; 
                $Univ = $bdd->query("select * from university where IdUnivers in(select IdUnivers from faculty where IdF in (select IdF from course where IdC  = '".$IdC."'))");
                while ($Uni = $Univ->fetch())
                {
                    $nameUnivers = $Uni["Name"];
                }
                $Facs = $bdd->query("select * from faculty where IdF in(select IdF from course where IdC  = '".$IdC."' )");
                while ($Fac = $Facs->fetch())
                {
                    $nameFac = $Fac["Name"];
                }
            ?>
                </table>
                </div>
                <form name="university" method="post" action="EditBasket.php">
                    <?php 
                    $c =0;
                    foreach($idChoose as $id)
                    {
                        echo '<input type="hidden" name="item'.$c.'" value="'.$id.'">';
                        $c=$c+1;
                    }
                    echo '<input type="hidden" name="length" value="'.$c.'">';
                    ?>
                    <button id="EditBasket" class="myButton">Edit</button>
                </form>
                <?php    
                $idChoose=array(); //On réinitialise le tableau
                ?>
                <button class="myButton">Download Learning Agreement</button>
                <p>ECTS total : <span id="total"><?php echo $ectsTot; $ectsTot = $ects; ?></span></p>
                <form name="DeleteBasket" method="post" onclick="return confirm('Are you sure to delete this Basket?')" action="DeleteBasket.php">
                    <?php 
                    $permutPrevious = $permut-1;
                    echo '<input type="hidden" name="LA" value="'.$permutPrevious.'">';
                    ?>
                    <button id="DeleteBasket" class="myButton">Delete this basket</button>
                </form>
                </div>
                <div class="Basket2">
                <div class="Bask">
                    <h1>Here your basket <?php echo $data['NumberLA']?></h1>
                    <h2>University : <?php echo $nameUnivers ?></h2>
                    <h2>Faculty : <?php echo $nameFac ?></h2>
                        <table id='tabBasket'>
                            <tr>
                                <th>Course</th>
                                <th>Ects</th>           
                            </tr>
                            <tr>
                            <td><?php echo $name;?></td> 
                                <td><?php echo $ects;?></td>
                
                             </tr>
            <?php 

            }
            else
            {
                $ectsTot=$ectsTot+$ects;
                 ?>

                <tr>
                <td><?php echo $name;?></td> 
                                <td><?php echo $ects;?></td>
                
                </tr>

            <?php    
            }
            array_push($idChoose,$data["IdChoose"]);
        }
        //print_r($idChoose);
            ?>
        </table>
                </div>
                <form name="university" method="post" action="EditBasket.php">
                    <?php 
                    $c =0;
                    foreach($idChoose as $id)
                    {
                        echo '<input type="hidden" name="item'.$c.'" value="'.$id.'">';
                        $c=$c+1;
                    }
                    echo '<input type="hidden" name="length" value="'.$c.'">';
                    ?>
                    <button id="EditBasket" class="myButton">Edit</button>
                </form>
                
                <button class="myButton">Download Learning Agreement</button>
                <p>ECTS total : <span id="total"><?php echo $ectsTot; $ectsTot = $ects; ?></span></p>
                <form name="DeleteBasket" method="post" onclick="return confirm('Are you sure to delete this Basket?')" action="DeleteBasket.php">
                    <?php 
                    echo '<input type="hidden" name="LA" value="'.$permut.'">';
                    ?>
                    <button id="DeleteBasket" class="myButton">Delete this basket</button>
                </form>
                </div>





         