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
 if ($role == '2' || $role == '1'){
 
   
$con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$result = mysqli_query($con,"select Username, SubmissionTitle, 
CASE when Status = 2 then 'Assigned to Associate Editor for review'
when Status = 3 then 'Assigned to a reviewer'
END as Status from manuscripts where Status = '2' || Status = '3'");

echo "List of titles and their status";
echo "<table border='1'>
<tr>
	<th>Username</th>
	<th>Title</th>
	<th>Status</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Username'] . "</td>";
echo "<td>" . $row['SubmissionTitle'] . "</td>";
echo "<td>" . $row['Status'] . "</td>";
echo "</tr>";
}
echo "</table>";

//mysqli_close($con);


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$result2 = mysqli_query($con,"select Username from users where Role = '4'");

echo "\n";
echo "List of reviewers";
echo "<table border='1'>
<tr>
	<th>Reviewers</th>
</tr>";

while($row = mysqli_fetch_array($result2))
{
echo "<tr>";
echo "<td>" . $row['Username'] . "</td>";
echo "</tr>";
}
echo "</table>";

//mysqli_close($con);
 ?> 
 
<br>
<p>Choose the reviewer and the title to be assigned to them.</p>
<form action="/reviewerAssigned.php/" method="POST">
    <div class="SameForm">
<select id="Reviewer" name="Reviewer">
<?php 
$sql = mysqli_query($con, "select Username from users where Role = '4'");
while ($row = mysqli_fetch_array($sql)){
echo '<option value="'.$row['Username'].'">' . $row['Username'] . '</option>';

}
 ?> 
 </select>
 <select id="SubmissionTitle" name="SubmissionTitle">
 <?php 
$sql2 = mysqli_query($con, "select Username, SubmissionTitle, 
CASE when Status = 2 then 'Assigned to associate editor for review'
END as Status from manuscripts where Status = '2' || Status ='3'");
while ($row2 = mysqli_fetch_array($sql2)){
echo '<option value="'.$row2['SubmissionTitle'].'">' . $row2['SubmissionTitle'] . '</option>';
}
mysqli_close($con);
 ?> 
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
        header('Location: /associateEditorMain.php/'); //change link to redirect user
        ob_end_flush();
    }?>