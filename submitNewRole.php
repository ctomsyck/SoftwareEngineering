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
 if($role == '1'){

$username=$_POST["Username"];
$dropbox=$_POST["role"];
 
$con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$result = mysqli_query($con,"update users set Role = '$dropbox' where Username = '$username'");

mysqli_close($con);
 
 ?> 
 
 <html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>New role submitted</title>
</head>
<body>
<P>Username <?php echo $username;?> role has been successfully changed.</P>
<br><a href="/chiefEditorMain.php">Editor in Chief main</a>
</body>
</html>
	</div>
		<div class="push"></div>
	</div>
		<footer>Copyright &copy; 2015</footer>
<?php
    } else {
        header('Location: /chiefEditorMain.php/'); //change link to redirect user
        ob_end_flush();
    }?>
