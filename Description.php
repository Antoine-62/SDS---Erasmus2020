<?php
include("include/Head.php");?>
<script src="Javascript/Comment.js"></script>
<?php
include("include/Header.php");
include("include/nav.php");
include("include/Configuration.php");
$CourseData = $bdd->prepare('SELECT * FROM course where IdC = ? ');
$CommentData = $bdd->prepare('SELECT * FROM comment where IdC = ? ');
if(isset($_POST['IdC']))
{
    $_SESSION['IdC']=$_POST['IdC'];
}
if(isset($_SESSION['IdC']))
{
    $CourseData->execute(array($_SESSION['IdC']));
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
        <h3>Comments about this class : </h3>
        <?php  
            $UserData = $bdd->prepare('SELECT Username FROM user where IdU = ? '); 
            $CommentData->execute(array($_SESSION['IdC']));
             while ($Comment = $CommentData->fetch())
             {
                $UserData->execute(array($Comment['IdU']));
                $user = $UserData->fetch(); 
                ?>
                <p>By <strong><?php echo $user['Username'];?></strong> posted the <em><?php echo $Comment['PublicationDate'];?></em> at <em><?php echo $Comment['PublicationTime'];?></em></p>
                 <p><?php echo $Comment['comment'];?></p>
            <?php    
             }
                 ?>
        <h3>Your comment : </h3>

        <form name="comment" id="comment" method="post" action="Comment.php">  
            <textarea id="commentText" name="comment" rows="6" cols="100">
            </textarea>
                <button class="myButton">Post my comment</button>
        </form>

        <form name="Courses" method="post" action="Courses.php">  
                <button class="myButton">Courses</button>
        </form>
<?php 
}
else{
    echo "No course selected";
}
?>

</div>
<?php include("include/footer.php"); ?>
