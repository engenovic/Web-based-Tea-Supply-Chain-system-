<?php
session_start();
if(!isset($_SESSION['staff'])) {
	?>
		<script>
		alert("You Must first login as the Staff!!");
		window.location="../login/staff_login/index.php";
		</script>
		<?php
	//<?php
	//header("Location: ../feedback/denyAccess.php?error=You must login as a farmer!! ");
	}
}
$staff=$_SESSION['staff'];
require '../login/connection.php';
$submit=$_POST['submit'];
if(isset($submit))
{
$name=$_POST['name'];
$password=$_POST['password'];
$sql = "UPDATE  staff SET Password='$password', Name='$name'  WHERE username='$staff'";

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
