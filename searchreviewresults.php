<?php 
session_start();   
$username = $_SESSION['username'];
$role = $_SESSION['role'];
$ID = $_SESSION['ID'];

$searchValue=$_POST["searchValue"];
$con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 if ($role == '1'){
 
if ($_POST["select"] == Author){ 
  $select=Author;
  $result = mysqli_query($con,"select
	    JBIN, SubmissionTitle, Author, ReviewerAssigned, Review, ReviewFile 
		from manuscriptAssignment
		where Author like '%$searchValue%'");
	
echo "Search Results";
echo "<table border='1'>
<tr>
	<th>JBIN</th>
	<th>Title</th>
	<th>Author</th>
	<th>Reviewer Assigned</th>
	<th>Review</th>
	<th>Review file</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['JBIN'] . "</td>";
echo "<td>" . $row['SubmissionTitle'] . "</td>";
echo "<td>" . $row['Author'] . "</td>";
echo "<td>" . $row['ReviewerAssigned'] . "</td>";
echo "<td>" . $row['Review'] . "</td>";
echo "<td>" . $row['ReviewFile'] . "</td>";
echo "</tr>";
}
echo "</table>"; 
}

if ($_POST["select"] == JBIN){ 
  $select=JBIN;
  $result = mysqli_query($con,"select
	    JBIN, SubmissionTitle, Author, ReviewerAssigned, Review, ReviewFile 
		from manuscriptAssignment
		where JBIN like '%$searchValue%'");
	
echo "Search Results";
echo "<table border='1'>
<tr>
	<th>JBIN</th>
	<th>Title</th>
	<th>Author</th>
	<th>Reviewer Assigned</th>
	<th>Review</th>
	<th>Review file</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['JBIN'] . "</td>";
echo "<td>" . $row['SubmissionTitle'] . "</td>";
echo "<td>" . $row['Author'] . "</td>";
echo "<td>" . $row['ReviewerAssigned'] . "</td>";
echo "<td>" . $row['Review'] . "</td>";
echo "<td>" . $row['ReviewFile'] . "</td>";
echo "</tr>";
}
echo "</table>"; 
}
if ($_POST["select"] == Title){ 
  $select=a.SubmissionTitle;
  $result = mysqli_query($con,"select
	    JBIN, SubmissionTitle, Author, ReviewerAssigned, Review, ReviewFile 
		from manuscriptAssignment
		where SubmissionTitle like '%$searchValue%'");
	
echo "Search Results";
echo "<table border='1'>
<tr>
	<th>JBIN</th>
	<th>Title</th>
	<th>Author</th>
	<th>Reviewer Assigned</th>
	<th>Review</th>
	<th>Review file</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['JBIN'] . "</td>";
echo "<td>" . $row['SubmissionTitle'] . "</td>";
echo "<td>" . $row['Author'] . "</td>";
echo "<td>" . $row['ReviewerAssigned'] . "</td>";
echo "<td>" . $row['Review'] . "</td>";
echo "<td>" . $row['ReviewFile'] . "</td>";
echo "</tr>";
}
echo "</table>"; 
}

mysqli_close($con);

 ?> 
 
<br><a href="/chiefEditorMain.php/">Editor in Chief main</a><br>


<?php
} else {
header('Location: /view.php/'); //change link to redirect user
}?> 