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
 
 ?> 
 
<br><p>Choose a title and assign a decision.</p>
<form action="/finaldecisionassigned.php/" method="POST">
		<div class="SameForm">
<select name="title" id="title">
<?php 
$sql = mysqli_query($con, "SELECT SubmissionTitle FROM manuscripts");
while ($row = mysqli_fetch_array($sql)){
echo '<option value="'.$row['SubmissionTitle'].'">' . $row['SubmissionTitle'] . '</option>';
}
mysqli_close($con);
?>
</select>
	<select id="decision" name="decision">
		<option value="1">None</option>
		<option value="2">Accept</option>
		<option value="3">Minor revisions</option>
		<option value="4">Major revisions</option>
		<option value="5">Reject before review</option>
		<option value="6">Reject after review</option>
	</select>
    <input type="submit" value="submit">
</div>    
</form><br>
	</div>
		<div class="push"></div>
	</div>
		<footer>Copyright &copy; 2015</footer>

<?php
    } else {
        header('Location: /chiefEditorMain.php/'); //change link to redirect user
        ob_end_flush();
    }?>