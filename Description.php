<?php
include("include/Head.php");
include("include/Header.php");
include("include/nav.php");
include("include/Configuration.php");
$CourseData = $bdd->prepare('SELECT * FROM course where IdC = ? ');
if(isset($_POST['IdC']))
{
    $_SESSION['IdC']=$_POST['IdC'];
}
if(isset($_SESSION['IdC']))
{
    $CourseData->execute(array($_POST['IdC']));
    $Course = $CourseData->fetch();
    $name = $Course["Name"];
    $Description = $Course["Description"];
    $ects = $Course["ECTS"];
    ?>
    <div id="container">
        <h1><?php echo $name ?></h1>
        <h3>Number of ects : <?php echo $ects ?></h3>
        <h3>Description :</h3>
        <p><?php echo $Description ?></p>
        <form name="Courses" method="post" action="Courses.php">  
                <button class="myButton">Description</button>
        </form>
<?php 
}
else{
    echo "No course selected";
}
?>

</div>

