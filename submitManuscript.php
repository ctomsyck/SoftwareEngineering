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
$_SESSION["title"] = $_POST["title"];
$title3 = $_SESSION["title"];
 if($role == '1' || $role == '3'){
 
$dropbox=$_POST["manuscripts"];
$symposiumTitle=$_POST["symposiumTitle"];
$title=$_POST["title"];
$firstAuthor=$_POST["firstAuthor"];
$secondAuthor=$_POST["secondAuthor"];
$thirdAuthor=$_POST["thirdAuthor"];
$fourthAuthor=$_POST["fourthAuthor"];
$funderName=$_POST["funderName"];
$grantNumber=$_POST["grantNumber"];
$grantRecipient=$_POST["grantRecipient"];
$corAuthor=$_POST["CorrespondingAuthor"];
$CorrespondingEmail=$_POST["CorrespondingEmail"];
  
$con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
$abstract=mysqli_real_escape_string($con, $_POST["abstract"]);
$editor=mysqli_real_escape_string($con, $_POST["editor"]);

if(isset($_POST['yesno'])){
    $symsp = "Yes";
}
else{
    $symsp = "No";
}

if(isset($_POST['published'])){
    $published1 = "Yes";
}
else{
    $published1 = "No";
}

if(isset($_POST['publishedTwo'])){
    $published2 = "Yes";
}
else{
    $published2 = "No";
}

if(isset($_POST['publishedThree'])){
    $published3 = "Yes";
}
else{
    $published3 = "No";
}



// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$result = mysqli_query($con,"INSERT INTO manuscripts (Username, ArticleType, SymposiumName, SubmissionTitle,
 FirstAuthor, SecondAuthor, ThirdAuthor, FourthAuthor, FunderName, GrantNumber, GrantRecipient, Abstract,
 Comments, CorrespondingAuthor, CorrespondingEmail, SympSpIssue, Published1, Published2, Published3)
 VALUES ('$username', '$dropbox', '$symposiumTitle', '$title', '$firstAuthor', '$secondAuthor', '$thirdAuthor', '$fourthAuthor',
 '$funderName', '$grantNumber', '$grantRecipient', '".$abstract."', '$editor', '$corAuthor',
 '$CorrespondingEmail', '$symsp', '$published1', '$published2', '$published3')");
 
$jbin1 = mysqli_query($con, "SELECT ManuscriptID 
FROM manuscripts where SubmissionTitle = '$title'");

$jbin2 = mysqli_query($con, "SELECT DATE_FORMAT( DateCreated,'%y') as Date
FROM manuscripts where SubmissionTitle = '$title'");
$jbin3;
$jbin4;
while ($row = mysqli_fetch_array($jbin1)){
$jbin3 = $row['ManuscriptID'];
}

while ($row2 = mysqli_fetch_array($jbin2)){
$jbin4 = $row2['Date'];
}
$jbin5 = "JBIN-" . $jbin4 . "-" .$jbin3;

mysqli_query($con,"update manuscripts set JBIN ='$jbin5' where SubmissionTitle = '$title'");
mysqli_query($con,"INSERT INTO decisions (SubmissionTitle) VALUES ('$title')");
mysqli_close($con);

//email
$to      = 'ctomsyck@gmail.com'; //change email notification!

$subject = 'New manuscript submission';
$message = "There is a new manuscript submission titled $title . \n $jbin5 .\n $abstract";
$headers = 'From: webmaster@ctomsyck.com' . "\r\n" .
    'Reply-To: webmaster@ctomsyck.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
 ?> 
 
 <html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>Manuscript submission</title>
</head>
<body>
<br>
        <br>
       <center>
           
        <form action="/upload.php" method="post" enctype="multipart/form-data" style="background-color:#E6E6FA">
       
            Select file to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload File" name="submit">
        </form>
		<br><a href="/submitterMain.php">Submitter main</a><br>
       </center>
</body>
</html>
  </div>
    <div class="push"></div>
  </div>
    <footer>Copyright &copy; 2015</footer>

<?php
    } else {
        header('Location: /submitterMain.php/'); //change link to redirect user
        ob_end_flush();
    }?>