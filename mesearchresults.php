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

$searchValue=$_POST["searchValue"];
$con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 if ($role == '5' || $role == '1'){
 
if ($_POST["select"] == Author){ 
  $select=Author;
  $result = mysqli_query($con,"select
	 a.SubmissionTitle,  a.JBIN,  a.author, a.Review as Reviewer1, a.ReviewFile as Reviewer1File,
         X.Review as Reviewer2, X.ReviewFile as Reviewer2File,
         c.DescriptionDecision as AEDecision, d.DescriptionDecision as MEDecision

from manuscriptAssignment a
left join manuscriptAssignment X on a.SubmissionTitle = X.SubmissionTitle
left join decisions b on a.SubmissionTitle = b.SubmissionTitle
left join statuses c on c.DecisionID = b.AEDecision
left join statuses d on d.DecisionID = b.MEDecision
where  a.Review =(
SELECT  Review
FROM manuscriptAssignment WHERE (AssignmentID) IN 
( SELECT min(AssignmentID)
  FROM manuscriptAssignment))

and  a.ReviewFile =(
SELECT  ReviewFile
FROM manuscriptAssignment WHERE (AssignmentID) IN 
( SELECT min(AssignmentID)
  FROM manuscriptAssignment))

and X.Review =(
SELECT  Review
FROM manuscriptAssignment WHERE (AssignmentID) IN 
( SELECT max(AssignmentID)
  FROM manuscriptAssignment))

and  X.ReviewFile =(
SELECT  ReviewFile
FROM manuscriptAssignment WHERE (AssignmentID) IN 
( SELECT max(AssignmentID)
  FROM manuscriptAssignment))

	and (a.Author like '%$searchValue%') and (a.AssocEditorAssign = '')");
	
echo "Search Results";
echo "<table border='1'>
<tr>
	<th>Title</th>
	<th>JBIN</th>
	<th>Author</th>
	<th>First Review</th>
	<th>First Review File</th>
	<th>Second Review</th>
	<th>Second Review File</th>
	<th>Associate Editor Decision</th>
	<th>Managing Editor Decision</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['SubmissionTitle'] . "</td>";
echo "<td>" . $row['JBIN'] . "</td>";
echo "<td>" . $row['author'] . "</td>";
echo "<td>" . $row['Reviewer1'] . "</td>";
echo "<td>" . $row['Reviewer1File'] . "</td>";
echo "<td>" . $row['Reviewer2'] . "</td>";
echo "<td>" . $row['Reviewer2File'] . "</td>";
echo "<td>" . $row['AEDecision'] . "</td>";
echo "<td>" . $row['MEDecision'] . "</td>";
echo "</tr>";
}
echo "</table>";
  
}
if ($_POST["select"] == JBIN){ 
  $select=JBIN;
  $result = mysqli_query($con,"select
	 a.SubmissionTitle,  a.JBIN,  a.author, a.Review as Reviewer1, a.ReviewFile as Reviewer1File,
         X.Review as Reviewer2, X.ReviewFile as Reviewer2File,
         c.DescriptionDecision as AEDecision, d.DescriptionDecision as MEDecision

from manuscriptAssignment a
left join manuscriptAssignment X on a.SubmissionTitle = X.SubmissionTitle
left join decisions b on a.SubmissionTitle = b.SubmissionTitle
left join statuses c on c.DecisionID = b.AEDecision
left join statuses d on d.DecisionID = b.MEDecision
where  a.Review =(
SELECT  Review
FROM manuscriptAssignment WHERE (AssignmentID) IN 
( SELECT min(AssignmentID)
  FROM manuscriptAssignment))

and  a.ReviewFile =(
SELECT  ReviewFile
FROM manuscriptAssignment WHERE (AssignmentID) IN 
( SELECT min(AssignmentID)
  FROM manuscriptAssignment))

and X.Review =(
SELECT  Review
FROM manuscriptAssignment WHERE (AssignmentID) IN 
( SELECT max(AssignmentID)
  FROM manuscriptAssignment))

and  X.ReviewFile =(
SELECT  ReviewFile
FROM manuscriptAssignment WHERE (AssignmentID) IN 
( SELECT max(AssignmentID)
  FROM manuscriptAssignment))
	and (a.JBIN like '%$searchValue%') 
	and (a.AssocEditorAssign = '')");
	
echo "Search Results";
echo "<table border='1'>
<tr>
	<th>Title</th>
	<th>JBIN</th>
	<th>Author</th>
	<th>First Review</th>
	<th>First Review File</th>
	<th>Second Review</th>
	<th>Second Review File</th>
	<th>Associate Editor Decision</th>
	<th>Managing Editor Decision</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['SubmissionTitle'] . "</td>";
echo "<td>" . $row['JBIN'] . "</td>";
echo "<td>" . $row['author'] . "</td>";
echo "<td>" . $row['Reviewer1'] . "</td>";
echo "<td>" . $row['Reviewer1File'] . "</td>";
echo "<td>" . $row['Reviewer2'] . "</td>";
echo "<td>" . $row['Reviewer2File'] . "</td>";
echo "<td>" . $row['AEDecision'] . "</td>";
echo "<td>" . $row['MEDecision'] . "</td>";
echo "</tr>";
}
echo "</table>";
  
}

if ($_POST["select"] == Title){ 
  $select=a.SubmissionTitle;
  $result = mysqli_query($con,"select
	 a.SubmissionTitle,  a.JBIN,  a.author, a.Review as Reviewer1, a.ReviewFile as Reviewer1File,
         X.Review as Reviewer2, X.ReviewFile as Reviewer2File,
         c.DescriptionDecision as AEDecision, d.DescriptionDecision as MEDecision

from manuscriptAssignment a
left join manuscriptAssignment X on a.SubmissionTitle = X.SubmissionTitle
left join decisions b on a.SubmissionTitle = b.SubmissionTitle
left join statuses c on c.DecisionID = b.AEDecision
left join statuses d on d.DecisionID = b.MEDecision
where  a.Review =(
SELECT  Review
FROM manuscriptAssignment WHERE (AssignmentID) IN 
( SELECT min(AssignmentID)
  FROM manuscriptAssignment))

and  a.ReviewFile =(
SELECT  ReviewFile
FROM manuscriptAssignment WHERE (AssignmentID) IN 
( SELECT min(AssignmentID)
  FROM manuscriptAssignment))

and X.Review =(
SELECT  Review
FROM manuscriptAssignment WHERE (AssignmentID) IN 
( SELECT max(AssignmentID)
  FROM manuscriptAssignment))

and  X.ReviewFile =(
SELECT  ReviewFile
FROM manuscriptAssignment WHERE (AssignmentID) IN 
( SELECT max(AssignmentID)
  FROM manuscriptAssignment))
	and (a.SubmissionTitle like '%$searchValue%') and (a.AssocEditorAssign = '')");
	
echo "Search Results";
echo "<table border='1'>
<tr>
	<th>Title</th>
	<th>JBIN</th>
	<th>Author</th>
	<th>First Review</th>
	<th>First Review File</th>
	<th>Second Review</th>
	<th>Second Review File</th>
	<th>Associate Editor Decision</th>
	<th>Managing Editor Decision</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['SubmissionTitle'] . "</td>";
echo "<td>" . $row['JBIN'] . "</td>";
echo "<td>" . $row['author'] . "</td>";
echo "<td>" . $row['Reviewer1'] . "</td>";
echo "<td>" . $row['Reviewer1File'] . "</td>";
echo "<td>" . $row['Reviewer2'] . "</td>";
echo "<td>" . $row['Reviewer2File'] . "</td>";
echo "<td>" . $row['AEDecision'] . "</td>";
echo "<td>" . $row['MEDecision'] . "</td>";
echo "</tr>";
}
echo "</table>";
}

  


mysqli_close($con);

 ?> 
 
<br><a href="/managingEditorMain.php/">Managing Editor main</a><br>

	</div>
		<div class="push"></div>
	</div>
		<footer>Copyright &copy; 2015</footer>
<?php
    } else {
        header('Location: /managingEditorMain.php/'); //change link to redirect user
        ob_end_flush();
    }?>