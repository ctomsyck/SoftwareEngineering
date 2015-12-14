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
 ?> 
 
<html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>Search</title>

</head>
<body>
<form action="/searchresults.php/" method="POST">
	<table>
	<tr>
		<td>Search by </td>
		<td>
		<select ID="select" name="select">
		<option value="Author">Author</option>
		<option value="JBIN">JBIN</option>
		<option value="Title">Title</option>
		</select>
		<td>
	</tr>
	<tr>
		<td>Search:</td>
		<td><input type="text" id="searchValue" name="searchValue" required/></td>
	</tr>
	<tr>
		<td><input type="reset" id="reset" value="reset"></td>
		<td><input type="submit" id="saveToDatabase" value="Submit" /></td>
	</tr>
	</table>
	</form>
<a href="/chiefEditorMain.php/">Editor in Chief main</a><br>

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