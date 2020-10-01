 <?php
require '../login/connection.php';

$submit=$_POST['submit'];
if(isset($submit))
{
$fullname=$_POST['fullname'];
$role=$_POST['role'];
$username=$_POST['username'];
$password=$_POST['password'];



$sql = "INSERT INTO `unilever`.`staff` (`Username`, `Password`, `Role`, `Name`) VALUES ('$username', '$password', '$role', '$fullname')";
if(mysqli_query($connect, $sql)){
?>
<script>
alert("successfully registered!");
window.location="menu.php";
</script>


<?php

} else{
  ?>
	  <script>
	  alert("Fail to register, Please try again!!");
	  window.location="menu.php";
	  </script>
	  <?php
}
}
else
{
 header("Location: index.php?error=Please check your input!");
}
// close connection
mysqli_close($connect);
?>
