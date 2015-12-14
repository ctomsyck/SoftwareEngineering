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
$title3 = $_SESSION['title'];
 if($role == '1' || $role == '3'){
 
  $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$file_name = basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $fileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($fileType != "doc" && $fileType != "docx" && $fileType != "pdf") {
        echo "Sorry, only DOC, DOCX and PDF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo " Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			$con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
			// Check connection
			if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
  
				$result = mysqli_query($con,"INSERT INTO uploads (SubmissionTitle, Username, File)
					VALUES ('$title3', '$username', '$file_name')");

				mysqli_close($con);
        } else {
            echo " Sorry, there was an error uploading your file.";
        }
    }
 ?> 
 
 <html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>Administration</title>
</head>
<body>
<br><div class="a"><a href="/submitterMain.php">Submitter Home</a><br></div>
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