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
  
  $result = mysqli_query($con,"select b.SubmissionTitle as e, a.DescriptionDecision as a, c.DescriptionDecision as b, d.DescriptionDecision as c
						from statuses a 
						join decisions b on a.DecisionID = b.DecisionID
						join statuses c on c.DecisionID = b.MEDecision
						join statuses d on d.DecisionID = b.AEDecision"); 
						
  echo "List of decisions and recommendations";
echo "<table border='1'>
<tr>
    <th>Title</th>
	<th>Editor in Chief decision</th>
	<th>Managing Editor recommendation</th>
	<th>Associate Editor recommendation</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['e'] . "</td>";
echo "<td>" . $row['a'] . "</td>";
echo "<td>" . $row['b'] . "</td>";
echo "<td>" . $row['c'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
 ?> 
 
 <html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>Recommendations</title>
</head>
<body>
<a href="/chiefEditorMain.php/">Editor in Chief main</a><br>
</body>
</html>
 
 
<?php
} else {
header('Location: /view.php/'); //change link to redirect user
}?> 