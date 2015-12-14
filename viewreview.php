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
  
  $result = mysqli_query($con,"SELECT JBIN, SubmissionTitle, ReviewerAssigned, Review, ReviewFile from manuscriptAssignment
						where Review is not null 
						or ReviewFile is not null");
						
echo "List of decisions and recommendations";
echo "<table border='1'>
<tr>
	 <th>JBIN</th>
    <th>Title</th>
	<th>Reviewer</th>
	<th>Review</th>
	<th>Review file</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['JBIN'] . "</td>";
echo "<td>" . $row['SubmissionTitle'] . "</td>";
echo "<td>" . $row['ReviewerAssigned'] . "</td>";
echo "<td>" . $row['Review'] . "</td>";
echo "<td>" . $row['ReviewFile'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
 ?> 
 
 <html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>Reviews</title>
</head>
<body>
<a href="/chiefEditorMain.php/">Editor in Chief main</a><br>
</body>
</html>
 
 
<?php
} else {
header('Location: /view.php/'); //change link to redirect user
}?> 