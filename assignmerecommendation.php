<?php
    ob_start();?>
<?php
session_start();   
$username = $_SESSION['username'];
$role = $_SESSION['role'];
$ID = $_SESSION['ID'];
 if ($role == '5' || $role == '1'){
 
$title=$_POST["title"];   
$decision=$_POST["decision"];  
$con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 mysqli_query($con, "update decisions set MEDecision = '$decision' where SubmissionTitle = '$title'");
 
 mysqli_close($con);
 
 echo "Decision Updated";
 ?>
 


<br><a href="/managingEditorMain.php">Managing Editor main</a><br><br>


<?php
    } else {
        header('Location: /managingEditorMain.php/'); //change link to redirect user
        ob_end_flush();
    }?>