<?php
require '../login/connection.php';
$submit=$_POST['add'];
if(isset($submit))
   {
  $date=$_POST['date'];
  $vnumber=$_POST['vnumber'];
  $driver=$_POST['driver'];
  $clerk=$_POST['clerk'];
  $bcenter=$_POST['bcenter'];
// echo $clerk;
// exit;
$sql = "INSERT INTO `unilever`.`collection` (`Center`, `Driver`, `Clerk`, `Date`, `CarNumber`) VALUES ('$bcenter', '$driver', '$clerk', '$date', '$vnumber')";
if(mysqli_query($connect, $sql)){
?>
<script>
alert("successfully Added");
window.location="menu.php";
</script>


<?php

} else{
  ?>
	  <script>
	  alert("Failed to Allocate, Please try again!!");
	  window.location="menu.php";
	  </script>
	  <?php
}

   }
   else
   {
    header("Location: index.php?error=Please check your input!");
   }


mysqli_close($connect);
?>
