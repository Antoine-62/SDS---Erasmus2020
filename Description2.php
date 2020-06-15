<?php include("include/footer.php"); ?>


<?php
include("include/Head.php");?>
<script src="Javascript/Comment.js"></script>
<?php
include("include/Header.php");
include("include/nav.php");
include("include/Configuration.php");
$CourseData = $bdd->prepare('SELECT * FROM course where IdC = ? ');
$CommentData = $bdd->prepare('SELECT * FROM comment where IdC = ?  order by idCom');
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
    <h1 class="whereFrom"><?php echo $name ?> - Description</h1>
    <div class="List">
        <h3>Number of ects : <?php echo $ects ?></h3>
        <h3>Description :</h3>
        <p><?php echo $Description ?></p>
    </div>
    <div class="List">
        <h3>Comments about this class : </h3>
        <?php  
            $UserData = $bdd->prepare('SELECT Username FROM user where IdU = ?'); 
            $CommentData->execute(array($_SESSION['IdC']));
             while ($Comment = $CommentData->fetch())
             {
                $UserData->execute(array($Comment['IdU']));
                $user = $UserData->fetch(); 
                ?>
                <div class="List">
                <p>By <strong><?php echo $user['Username'];?></strong> posted the <em><?php echo $Comment['PublicationDate'];?></em> at <em><?php echo $Comment['PublicationTime'];?></em></p>
                 <p><?php echo $Comment['comment'];?></p>
                 <?php if(($_SESSION['Username'] === $user['Username']) || ($_SESSION['status'] === 3))
                 { ?>
                    <form name="deleteComment" id="deleteComment" method="post" action="deleteComment.php">  
                        <button class="myButton">Delete this comment</button>
                        <input type="hidden" name="idComment" value=<?php echo $Comment['idCom'] ?>>
                    </form>
                    </div>
                <?php   }
              
             }
                 ?>
        
        <div class="WriteComment">
        <h3>Your comment : </h3>

        <form name="comment" id="comment" method="post" action="Comment.php">  
            <textarea id="commentText" name="comment" rows="6" cols="100">
            </textarea><br/><br/>
                <button class="myButton">Post my comment</button>
            </form>
            </div>
        </div>
        <div class="WriteComment">
        <form name="Courses" method="post" action="Basket.php">  
                <button class="myButton">Courses</button>
        </form><br/>
        </div>
<?php 
}
else{
    echo "No course selected";
}
?>


<?php include("include/footer.php"); ?>
