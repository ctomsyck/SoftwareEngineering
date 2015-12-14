<?php
    ob_start();?>
session_start();   
$username = $_SESSION['username'];
$role = $_SESSION['role'];
$ID = $_SESSION['ID'];
if($role == '1' || $role == '4'){
$con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
$review=mysqli_real_escape_string($con, $_POST["review"]);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
 mysqli_query($con, "UPDATE manuscriptAssignment set Review = '$review' where ReviewerAssigned = '$username'");
 mysqli_close($con);
 
 //email
$to      = 'ctomsyck@gmail.com'; //change email notification!

$subject = 'New review submitted';
$message = "There is a new review submitted by $username.";
$headers = 'From: webmaster@ctomsyck.com' . "\r\n" .
    'Reply-To: webmaster@ctomsyck.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
 ?> 
<html>
<head>
	<link type="text/css" rel="stylesheet" href="http://ctomsyck.com/stylesheet.css"/>
	<title>Review file submission</title>
</head>
<body>
<br>
        <br>
       <center>
          If you do not want to include a file submission of your review please use link Reviewer main.<br>  
        <form action="/reviewerupload.php" method="post" enctype="multipart/form-data" style="background-color:#E6E6FA">
       
            Select file to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload File" name="submit">
        </form>
		<br><a href="/reviewerMain.php">Reviewer main</a><br>
       </center>
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