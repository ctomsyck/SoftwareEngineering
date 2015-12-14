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
 if($role == '5' || $role == '1'){


$title=$_POST["SubmissionTitle"];
$editor=$_POST["AssociateEditor"];
 
$con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if ($title != NULL && $editor != NULL){
mysqli_query($con,"insert into manuscriptAssignment (SubmissionTitle, AssocEditorAssign)VALUES ('$title', '$editor')");
mysqli_query($con,"update manuscriptAssignment set Author =
(select FirstAuthor from manuscripts where submissionTitle = '$title') 
 where submissionTitle = '$title'");
 mysqli_query($con,"update manuscriptAssignment set 
JBIN = (select JBIN from manuscripts where submissionTitle = '$title') 
 where submissionTitle = '$title'");
mysqli_query($con,"update manuscripts set status = '2' where submissionTitle = '$title'");
}
mysqli_close($con);
 
 ?> 
 
 <html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>New associate editor assigned</title>
</head>
<body>
<P>Manuscript <?php echo $title;?> is now assigned to <?php echo $editor;?>.
</P>

</body>
</html>
	</div>
		<div class="push"></div>
	</div>
		<footer>Copyright &copy; 2015</footer>
<?php
    } else {
        header('Location: /managingEditorMain.php/'); //change link to redirect user
        ob_end_flush();
    }?>
