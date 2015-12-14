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
 if($role == '1' || $role == '4'){
 
 
 $con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
 $result = mysqli_query($con, "select a.File from uploads a
							join manuscriptAssignment b on a.SubmissionTitle = b.SubmissionTitle
							and b.ReviewerAssigned = '$username'");
 
 while ($row = mysqli_fetch_array($result)){
 //$file = "/uploads/".$row['File']."";
 //echo $file;
 ?> <a href="/uploads/<?php echo $row["File"]; ?>">Download file</a>
 <?php
//echo "<a href=".$file.">Download file</a>";
/*
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}*/
}



 ?> 
 
 <html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>ReviewerMain</title>
</head>
<body>

</body>
</html>
  </div>
    <div class="push"></div>
  </div>
    <footer>Copyright &copy; 2015</footer>

<?php
    } else {
        header('Location: /reviewerMain.php/'); //change link to redirect user
        ob_end_flush();
    }?>