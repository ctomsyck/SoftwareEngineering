<?php
    ob_start();?>
    <html>

    <head>
        <link type="text/css" rel="stylesheet" href="stylesheet.css" />
        <title>Assign Associate Editor</title>
    </head>

    <body id="body1">
        <div id="header">
            <img src="image/title.png" width="423px" height="126px">
        </div>
        <br><br>
        
        <div class="wrapper">
        <div id="content">
            
                <?php 
session_start();   
$username = $_SESSION['username'];
$role = $_SESSION['role'];
$ID = $_SESSION['ID'];
 if ($role == '5' || $role == '1'){

   
$con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$result = mysqli_query($con,"select Username, SubmissionTitle, 
CASE when Status = 1 then 'New Status - not assigned'
END as Status from manuscripts where Status = '1'");

//echo "List of submissions not assigned";
echo "<table border='1'>
<tr>
    <caption>List of submissions not assigned</caption>
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
  
$result2 = mysqli_query($con,"select Username from users where Role = '2'");

echo "\n";
//echo "List of current associate editors";
echo "<table border='1'>
<tr>
<caption>List of current associate editors</caption>
	<th>Associate editors</th>
</tr>";

while($row = mysqli_fetch_array($result2))
{
echo "<tr>";
echo "<td>" . $row['Username'] . "</td>";
echo "</tr>";
}
echo "</table>";


 ?>

                    <br>

                    <br>
                    <p>Choose the associate editor and the title to be assigned to them.</p>
                    <form action="/associateEditorAssignment.php/" method="POST">
                        <div class="SameForm">
                            <select id="AssociateEditor" name="AssociateEditor">
                                <?php 
$sql = mysqli_query($con, "select Username from users where Role = '2'");
while ($row = mysqli_fetch_array($sql)){
echo '<option value="'.$row['Username'].'">' . $row['Username'] . '</option>';

}
 ?>
                            </select>
                            <select id="SubmissionTitle" name="SubmissionTitle">
                                <?php 
$sql2 = mysqli_query($con, "select Username, SubmissionTitle, 
CASE when Status = 1 then 'New status - not assigned'
END as Status from manuscripts where Status = '1'");
while ($row2 = mysqli_fetch_array($sql2)){
echo '<option value="'.$row2['SubmissionTitle'].'">' . $row2['SubmissionTitle'] . '</option>';
}
mysqli_close($con);
 ?>
                            </select>


                            <input type="submit" value="submit">
                        </div>
                    </form>
                </div>
                <div class="push"></div>
            </div>
            <footer>Copyright &copy; 2015</footer>
    </body>
</html>
    <?php
    } else {
        header('Location: /managingEditorMain.php/'); //change link to redirect user
        ob_end_flush();
    }?>