<?php
    ob_start();?>
<body id="body1">
	<div id="header">
		<img src="http://ctomsyck.com/image/title.png" width="423px" height="126px">
	</div>
		
	<br>
	<br>
	<div class="wrapper">
  <div id="content">
<?php echo "<link rel='stylesheet' type='text/css' href='http://ctomsyck.com/stylesheet.css' />"; php?>

<?php 
session_start();   
$username = $_SESSION['username'];
$role = $_SESSION['role'];
$ID = $_SESSION['ID'];
 if($role == '2' || $role == '1'){


$title=$_POST["SubmissionTitle"];
$reviewer=$_POST["Reviewer"];
 
$con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if ($title != NULL && $reviewer != NULL){
mysqli_query($con,"insert into manuscriptAssignment (SubmissionTitle, ReviewerAssigned) VALUES ('$title', '$reviewer')");
mysqli_query($con,"update manuscripts set status = '3' where submissionTitle = '$title'");
}
mysqli_close($con);
 
 ?> 
 
 <html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>New reviewer assigned</title>
</head>
<body>
<P>Manuscript <?php echo $title;?> is now assigned to <?php echo $reviewer;?>.
<br><a href="/associateEditorMain.php">Associate Editor main</a><br></P>
</body>
</html>
	</div>
		<div class="push"></div>
	</div>
		<footer>Copyright &copy; 2015</footer>
<?php
    } else {
        header('Location: /associateEditorMain.php/'); //change link to redirect user
        ob_end_flush();
    }?>
