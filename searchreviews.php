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
<form action="/searchreviewresults.php/" method="POST">
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

<?php
} else {
header('Location: /view.php/'); //change link to redirect user
}?> 