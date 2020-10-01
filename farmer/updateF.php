<?php
session_start();
if(!isset($_SESSION['user'])) {
	?>
	  <script>
	  alert("You Must first login as the farmer!!");
	  window.location="../login/farmer_login/index.php";
	  </script>
	  <?php
	//<?php
//header("Location: ../feedback/denyAccess.php?error=You must login as a farmer!! ");
}

require '../login/connection.php';

$submit=$_POST['submit'];
if(isset($submit))
{
$phoneN=$_POST['phone'];
$password=$_POST['password'];
$Fname=$_POST['fname'];
$Lname=$_POST['lname'];
$TeaNumber=$_POST['session'];

$phone= '+254'.substr($phoneN,1);
$sql = "UPDATE  farmers SET password='$password', FName='$Fname', LName='$Lname',Phone='$phone' WHERE TeaNumber='$TeaNumber'";

$result=$connect->query($sql);
if($result){
	?>
		<script>
		alert("Updated successfully!");
		window.location="updateProfile.php";
		</script>
	<?php
	} else{
		?>
			<script>
			alert("Failed to Update!");
			window.location="updateProfile.php";
			</script>
		<?php
	}
	}
	else
	{
		?>
	  	<script>
	  	alert("Fatal Error occurred!");
	  	window.location="updateProfile.php";
	  	</script>
	  <?php
	}
	// close connection

	?>
