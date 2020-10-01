<?php
require '../login/connection.php';
//include '../admin/SMS.php';
$submit=$_POST['mess'];
if(isset($submit))
   {
  $body=$_POST['message'];
  $TeaNumber=$_POST['tnumber'];
// echo $body.$TeaNumber;
// exit;
// // Select Phone Number to use with SMS API
// $PhoneM="SELECT Phone
// FROM farmers
// WHERE TeaNumber = '$TeaNumber'";
//
// $PhoneM=mysqli_query($connect,$PhoneM);
//
// $PhoneM=mysqli_fetch_assoc($PhoneM);
//
// $Phone= $PhoneM['Phone'];
//  //$PhoneN=str_replace("+254","0",$Phone);
 // Insert Message Reply
 // echo   $body.  $TeaNumber;
 // exit;
$sql = "INSERT INTO `unilever`.`contact` (`TeaNumber`, `Message`, `Type`) VALUES ('$TeaNumber', '$body', 'Outbox')";
if(mysqli_query($connect, $sql)){
?>
<script>
alert("Message Sent successfully!");
window.location="message.php";
</script>

<?php

} else{
   die(mysqli_error($connect));
  ?>
  <script>
  alert("Message Sent Failed!");
  window.location="message.php";
  </script>
  <?php
}

   }
   else
   {
     ?>
     <script>
     alert("Input not submitted!");
     window.location="message.php";
     </script>
     <?php
   }


mysqli_close($connect);
?>
