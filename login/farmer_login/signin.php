<?php
// starting the session
session_start();
//print_r($_POST['password']);
// Import the connection details from connection.php
require 'connection.php';

// Checking if login button was clikcked
// ensures the php script is only executed on click on the submit button

if(isset($_POST['submit']))
  {

	    $TeaNumber=$_POST['teanumber'];
		$password=$_POST['password'];
  //  $password=md5($pass);
		// echo $password;
    // exit;
//pick login details from the form

$sql="SELECT * FROM farmers where TeaNumber='$TeaNumber' AND Password='$password'";
$result=mysqli_query($connect,$sql);

if(mysqli_num_rows($result)>0){

	$_SESSION['user']=$TeaNumber;
  //redirect to account
	header("Location: ../../farmer/account.php");
}
else{
  ?>
  <script>
  alert("Wrong Password or Username!!");
  window.location="index.php";
  </script>
  <?php
}

		}
?>
