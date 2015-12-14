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
 
   
$con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$result = mysqli_query($con,"select Username, CASE 
      WHEN Role = 1 THEN 'Editor in Chief' 
      WHEN Role = 2 THEN 'Associate Editor'
	  WHEN Role = 3 THEN 'Author'
	  WHEN Role = 5 THEN 'Managing Editor'
	  ELSE 'Reviewer'
   END as Role from users");

echo "List of current users and roles";
echo "<table border='1'>
<tr>
	<th>Username</th>
	<th>Role</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Username'] . "</td>";
echo "<td>" . $row['Role'] . "</td>";
echo "</tr>";
}
echo "</table>";

//mysqli_close($con);
 ?> 
 
<br><p>Choose a username and their new role.</p>
<form action="/submitNewRole.php/" method="POST">
<select name="Username" id="Username">
<?php 
$sql = mysqli_query($con, "SELECT Username FROM users");
while ($row = mysqli_fetch_array($sql)){
echo '<option value="'.$row['Username'].'">' . $row['Username'] . '</option>';
}
mysqli_close($con);
?>
</select>
	<select id="role" name="role">
		<option value="1">Editor in Chief</option>
		<option value="5">Managing Editor</option>
		<option value="2">Associate Editor</option>
		<option value="3">Author</option>
		<option value="4">Reviewer</option>
	</select>
	
    <input type="submit" value="submit">

</form>
	</div>
		<div class="push"></div>
	</div>
		<footer>Copyright &copy; 2015</footer>

<?php
    } else {
        header('Location: /cheifEditorMain.php/'); //change link to redirect user
        ob_end_flush();
    }?>