<?php
session_start();

$username = $_SESSION['username'];
$role = $_SESSION['role'];
$ID = $_SESSION['ID'];

//echo $username.'<br>';
//echo $role.'<br>';
//echo $ID.'<br>';

?>

 <html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>Destinations</title>
</head>
<body id="body1">
	<div id="header">
		<img src="image/title.png" width="423px" height="126px">
	</div>
		
	<br>
	<br>
	<div class="wrapper">
  <div id="content">
<P>Please choose your role:</P>
<div class="a">
<a href="/chiefEditorMain.php">Editor in Chief</a><br>
<a href="/managingEditorMain.php">Managing Editor</a><br>
<a href="/associateEditorMain.php">Associate Editor</a><br>
<a href="/reviewerMain.php">Reviewer</a><br>
<a href="/submitterMain.php">Submitter</a><br>
</div>
	</div>
		<div class="push"></div>
	</div>
		<footer>Copyright &copy; 2015</footer>
</body>
</html>