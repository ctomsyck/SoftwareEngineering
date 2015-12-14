<?php
    ob_start();?>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="http://ctomsyck.com/stylesheet.css"/>
</head>
<body id="body1">
  <div id="header">
    <img src="http://ctomsyck.com/image/title.png" width="423px" height="126px">
  </div>
    
  <br>
  <br>
  <div class="wrapper">
  <div id="content">
<?php echo "<link rel='stylesheet' type='text/css' href='stylesheet.css' />"; php?>

<?php
   $username="root";
   $password="";
   $database="journal";

   $username=$_POST["Username"];
   $password=$_POST["Password"];
   $password2=$_POST['conf_pass'];
   $firstname=$_POST["firstname"];
   $lastname=$_POST["lastname"];
   $academicdegrees=$_POST["academicdegrees"];
   $organizations=$_POST["organizations"];
   $email=$_POST["email"];
   $con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
   

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$dup = mysqli_query($con,"SELECT username FROM users WHERE username='$username'");
        if(mysqli_num_rows($dup) > 0){
            echo '<b>Please choose a different username. Username already used.</b>';
        } if(mysqli_num_rows($dup) <= 0){ 
		mysqli_multi_query($con,"INSERT INTO users  (Username, Password)VALUES ( '$username', '$password');
		insert into userinfo (ID,First,Last,AcademicDegrees,Organizations,Email) values (LAST_INSERT_ID(), '$firstname', '$lastname','$academicdegrees', '$organizations', '$email')");

mysqli_close($con);
echo '<b>Congratulations registration was successful.</b>';

?>
<p>
<a href="Registration.html">Return to the registration page</a>
</p>
  </div>
    <div class="push"></div>
  </div>
    <footer>Copyright &copy; 2015</footer>

</body>
</html>
<?php
    } else {
        header('Location: /Registration.html/'); //change link to redirect user
        ob_end_flush();
    }?>