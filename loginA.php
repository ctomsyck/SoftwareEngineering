<?php
 ob_start();
$result = "";
$username=$_POST["Username"];
$password=$_POST["Password"];

   
$con=mysqli_connect("fdb6.awardspace.net","1966405_journal","rich1journal","1966405_journal");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  
$result = mysqli_query($con,"Select role, ID from users where Username = '$username' and Password = '$password'");

mysqli_close($con);
 
$row = mysqli_fetch_array($result);
$role = $row['role'];
$ID = $row['ID'];
//$role = array_shift($row);

if($role == ''){
$role = "1001";
}
 
if($role == '1001'){
 echo "Incorrect login you will be redirected back to login page in 5 seconds";
 header('Refresh: 5; URL=/loginA.html');
 } else {
 
session_start();  
$_SESSION['username'] = $username;
$_SESSION['role'] = $role;
$_SESSION['ID'] = $ID;

echo "Done";
//echo("<script>location.href = 'ctomsyck.com/index.php?msg=$msg';</script>");
header('Location: /associateEditorMain.php');
ob_end_flush();
}
?>
