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
 if($role == '1' || $role == '4'){
 ?> 
 
<html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>Review submission</title>
</head>
<body>


<form action="/reviewfilesubmit.php" method="POST">
    <br>Enter your review into the text area below and hit submit or hit submit and on the 
	<br>next page upload a document with your review.<br>
	<br>Enter review:<br><textarea id="review" name="review" rows="10" cols="80"> </textarea><br>
    <input type="submit" value="submit">
</form>
<br><br><a href="/reviewerMain.php">Reviewer main</a><br>
</body>
</html>
	</div>
		<div class="push"></div>
	</div>
		<footer>Copyright &copy; 2015</footer>

<?php
    } else {
        header('Location: /reviewerMain.php/'); //change link to redirect user
        ob_end_flush();
    }?>