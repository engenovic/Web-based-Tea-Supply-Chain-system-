<?php
session_start();
$farmer=$_SESSION['user'];
include '../login/connection.php';
 $Rsql="select * from farmers WHERE TeaNumber= '$farmer'";
 $Rresult=mysqli_query($connect,$Rsql);
 while ($row=mysqli_fetch_array($Rresult))
 {
 	//echo $username;
 	$fname=$row['FName'];
 	$lname=$row['LName'];
  //$fullName=$fname.' '.$lname;
  $TeaNumber=$farmer;
 	$PhoneN=$row['Phone'];
 $phone=str_replace("+254","0",$PhoneN);
 	$IDNumber=$row['IDNumber'];
 	$Center=$row['CenterID'];
 }
 // Messages
 $mess="SELECT* FROM contact WHERE TeaNumber='$farmer' AND Type='Outbox'";
 $mess=mysqli_query($connect,$mess);
   //die(mysqli_error($connect));
  if(mysqli_num_rows($mess)>0) {
   while($row=mysqli_fetch_assoc($mess)){
   $messes[]=$row;
   // print_r($messes) ;
   // exit;
   }
 }
 //My Supplies

 $Pquery="SELECT* FROM package WHERE TeaNumber='$farmer'";
 $Presult=mysqli_query($connect,$Pquery);
   //die(mysqli_error($connect));
  if(mysqli_num_rows($Presult)>0) {
   while($row=mysqli_fetch_assoc($Presult)){
   $kgs[]=$row;
   }
   // print_r($kgs) ;
   // exit;
  }
  //My Transactions

  $Nquery="SELECT account.Balance,account.TransID,account.Date,account.TransType,account.Amount
   FROM  account WHERE TeaNumber='$farmer' ORDER BY account.TransID DESC LIMIT 10";
  $Nresult=mysqli_query($connect,$Nquery);
    //die(mysqli_error($connect));
   if(mysqli_num_rows($Nresult)>0) {
    while($row=mysqli_fetch_assoc($Nresult)){
    $moneys[]=$row;
    }
    // print_r($trans) ;
    // exit;
   }

   $UserBalance="SELECT Balance
   FROM account
   WHERE TeaNumber = '$farmer'
   ORDER BY TransID DESC
   LIMIT 1";

   $UserBalance=mysqli_query($connect,$UserBalance);
   $UserBalance=mysqli_fetch_assoc($UserBalance);
   $Balance= $UserBalance['Balance'];

 ?>
