<?php
    ob_start();?>
<body id="body1">
    <div id="header">
    <img src="http://ctomsyck.com/image/title.png" width="423px" height="126px">
  </div>
  <div id="content">
<?php echo "<link rel='stylesheet' type='text/css' href='http://ctomsyck.com/stylesheet.css' />"; php?>

<?php 
session_start();   
$username = $_SESSION['username'];
$role = $_SESSION['role'];
$ID = $_SESSION['ID'];
 if ($role == '2' || $role == '1'){
 
 
$title=$_POST["title"];   
$decision=$_POST["decision"];  
$con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 mysqli_query($con, "update decisions set AEDecision = '$decision' where SubmissionTitle = '$title'");
 
 mysqli_close($con);
 
 echo "Decision Updated";
 ?> 
 


<br>
<div class="a"><a href="/associateEditorMain.php">Associate Editor main</a></div><br><br>

</div>
    <br>
    <br>
    <div id="footer">Copyright &copy; 2015</div>
 </body>
<?php
    } else {
        header('Location: /associateEditorMain.php/'); //change link to redirect user
        ob_end_flush();
    }?>