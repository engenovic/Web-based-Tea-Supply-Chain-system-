<?php
session_start();
require 'connection.php';
//include '../admin/SMS.php';
$submit=$_POST['submit'];
if(isset($submit))
{
$TeaNumber=$_POST['teanumber'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$idnumber=$_POST['idnumber'];
$centerid=$_POST['centerid'];
$phoneN= '+254'.substr($phone,1);
$messge="Congratulations $fname.' '.$lname! You are now a registered member of  unilever Ltd.
Your Tea Number is $username and Password $password. Do not Share";
  require_once('regSuccess.php');
//$password=md5($pass);
// echo $TeaNumber;
// exit;
}else {
  ?>
	  <script>
	  alert("Please Check Your Input!!");
	  window.location="../login/farmer_login/index.php";
	  </script>
	  <?php
}


$sql = "INSERT INTO `unilever`.`farmers` (`TeaNumber`, `CenterID`, `FName`, `LName`, `IDNumber`,`Phone`, `Password`) VALUES ('$TeaNumber', '$centerid', '$fname', '$lname', '$idnumber','$phoneN','$password')";
if(mysqli_query($connect, $sql)){
  header("Location: ../feedback/regSuccess.php?success=Successfully Registered");
}
else
{
  //die(mysqli_error($connect));
 header("Location: ../feedback/regFailed.php?error=Registration Failed!");
}
// close connection
mysqli_close($connect);
?>
