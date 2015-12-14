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
  
$result = mysqli_query($con,"select JBIN, Username, SubmissionTitle, ArticleType, SympSpIssue, SymposiumName, FirstAuthor,
SecondAuthor, ThirdAuthor, FourthAuthor, FunderName, GrantNumber, GrantRecipient, 
DateCreated, CorrespondingAuthor, CorrespondingEmail, Published1, Published2, Published3 
from manuscripts order by JBIN");

echo "List of submissions and their data. <br>";
echo "The three questions at end of table are as follows: <br>";
echo "This manuscript has not been published before. <br>";
echo "This manuscript is currently not under consideration for publication anywhere else.<br>";
echo "This manuscript has been approved by all co-authors, if any, as well as by the responsible authorities<br>";
echo "(tacitly or explicitly) at the institute where the work has been carried out.<br>"; 

echo "<table border='1'>
<tr>
	<th>JBIN</th>
	<th>Username</th>
	<th>Title</th>
	<th>Article type</th>
	<th>Symposium or special issue</th>
	<th>Symposium or special issue name</th>
	<th>First author</th>
	<th>Second author</th>
	<th>Third author</th>
	<th>Fourth author</th>
	<th>Funder name</th>
	<th>Grant number</th>
	<th>Grant recipient</th>
	<th>Date created</th>
	<th>Corresponding Author</th>
	<th>Corresponding email</th>
	<th>Question 1</th>
	<th>Question 2</th>
	<th>Question 3</th>
</tr>";

while($row = mysqli_fetch_array($result))
{

echo "<tr>";
echo "<td>" . $row['JBIN'] . "</td>";
echo "<td>" . $row['Username'] . "</td>";
echo "<td>" . $row['SubmissionTitle'] . "</td>";
echo "<td>" . $row['ArticleType'] . "</td>";
echo "<td>" . $row['SympSpIssue'] . "</td>";
echo "<td>" . $row['SymposiumName'] . "</td>";
echo "<td>" . $row['FirstAuthor'] . "</td>";
echo "<td>" . $row['SecondAuthor'] . "</td>";
echo "<td>" . $row['ThirdAuthor'] . "</td>";
echo "<td>" . $row['FourthAuthor'] . "</td>";
echo "<td>" . $row['Fundername'] . "</td>";
echo "<td>" . $row['GrantNumber'] . "</td>";
echo "<td>" . $row['GrantRecipient'] . "</td>";
echo "<td>" . $row['DateCreated'] . "</td>";
echo "<td>" . $row['CorrespondingAuthor'] . "</td>";
echo "<td>" . $row['CorrespondingEmail'] . "</td>";
echo "<td>" . $row['Published1'] . "</td>";
echo "<td>" . $row['Published2'] . "</td>";
echo "<td>" . $row['Published3'] . "</td>";
echo "</tr>";
}
echo "</table>";

echo "\r\n";

$result2 = mysqli_query($con, "select JBIN, Abstract, Comments from manuscripts order by JBIN");

echo "<table border='1'>
<tr>
	<th>JBIN</th>
	<th>Abstract</th>
	<th>Comments</th>
<tr>";

while($row2 = mysqli_fetch_array($result2))
{

echo "<tr>";
echo "<td>" . $row2['JBIN'] . "</td>";
echo "<td>" . $row2['Abstract'] . "</td>";
echo "<td>" . $row2['Comments'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
 ?> 
 
<html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>Submission data</title>
</head>
<body>
<div class="a"><a href="/chiefEditorMain.php/">Editor in Chief main</a><br></div>
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