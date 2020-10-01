<?php
require 'connection.php';
$submit=$_POST['contact'];
if(isset($submit))
   {
  $body=$_POST['message'];
  $tnumber=$_POST['tnumber'];
// echo $tnumber.$body;
// exit;
$sql = "INSERT INTO `unilever`.`contact` (`TeaNumber`, `Message`, `Type`) VALUES ('$tnumber', '$body', 'Inbox')";
if(mysqli_query($connect, $sql)){
?>
<script>
alert("Message Sent successfully!");
window.location="../index.php";
</script>


<?php

} else{
  // die(mysqli_error($connect));
  header("refresh:Location: ../feedback/regFailed.php?error=Failed to register");
}

   }
   else
   {
    header("Location: index.php?error=Please check your input!");
   }


mysqli_close($connect);
?>
