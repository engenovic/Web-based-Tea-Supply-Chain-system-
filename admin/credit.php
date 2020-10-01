<?php

require '../login/connection.php';
$submit=$_POST['credit'];
if(isset($submit))
   {
  $tnumber=$_POST['tnumber'];
  $date=$_POST['date'];
  $kgs=$_POST['kgs'];
  $price=$_POST['price'];
  $transID=rand(1500, 9999);
  $refcode='UN'.$transID.'MU';
  // echo $refcode;
  // exit;
//calculate total
$amount= $price*$kgs;
// Sum Kilograms
$Kcurrent="SELECT MAX(PackageID)  as c From package WHERE TeaNumber='$tnumber'";
$result=$connect->query($Kcurrent)->fetch_assoc();
$c= $result['c'];
// echo $c;
// exit;
$Kquery="SELECT Total FROM package WHERE PackageID='$c'";
$KG=$connect->query($Kquery)->fetch_assoc();
$Total= $KG['Total']+$kgs;

$sql = "INSERT INTO `unilever`.`package` (`TeaNumber`, `Date`, `Kilograms`,`Total`) VALUES ('$tnumber', '$date', '$kgs','$Total')";

$result=$connect->query($sql);

if($result) {
$transType="Deposit";
$current="SELECT MAX(TransID)  as current From account WHERE TeaNumber='$tnumber' ";
$result=$connect->query($current)->fetch_assoc();
$current= $result['current'];

$Balance="SELECT Balance FROM account WHERE TransID='$current'";
$Balance=$connect->query($Balance)->fetch_assoc();
$cbalance= $Balance['Balance']+$amount;
//  echo $cbalance.$transType.$tnumber.$refcode.$amount;
// exit;
$sql="INSERT INTO account (TeaNumber,Date,Amount,TransType,Balance,RefCode) VALUES('$tnumber','$date','$amount','$transType','$cbalance','$refcode')";
if(mysqli_query($connect, $sql)){
?>
<script>
alert("successfully Added!");
window.location="menu.php";
</script>


<?php

} else{
 //die(mysqli_error($connect));
  ?>
	  <script>
	  alert("Failed to Add, Please try again!!");
	  window.location="menu.php";
	  </script>
	  <?php
}
}
   }
   else
   {
     ?>
   	  <script>
   	  alert("Fatal Error occurred!!");
   	  window.location="menu.php";
   	  </script>
   	  <?php
   }
   // close connection
   mysqli_close($connect);
   ?>
