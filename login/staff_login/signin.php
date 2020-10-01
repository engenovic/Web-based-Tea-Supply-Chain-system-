<?php
// starting the session
session_start();
//print_r($_POST['password']);
// Import the connection details from connection.php
require '../connection.php';

// Checking if login button was clikcked
// ensures the php script is only executed on click on the submit button

if(isset($_POST['staff']))
  {

	    $username=$_POST['username'];
		$password=$_POST['password'];
    $role=$_POST['role'];
// echo $username.$password.$role;
// exit;
//pick login details from the form
if(($username=="Admin")&&($password=="maisy12")){
	$_SESSION['Admin']=$username;
	header("Location: ../../admin/index.php");
}
else{
$sql="SELECT * FROM staff where Username='$username' AND Password='$password' AND Role='$role'";
$result=mysqli_query($connect,$sql);

if(mysqli_num_rows($result)>0){
//die(mysqli_error($connect));
	$_SESSION['staff']=$username;
  //redirect to account
	header("Location: ../../staff/account.php");
}
}
}
else{
  ?>
  <script>
  alert("Wrong Password or Username!!");
  window.location="index.php";
  </script>
  <?php
		}
?>
