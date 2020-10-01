<?php
session_start();
$farmer=$_SESSION['user'];
include '../login/connection.php';
//include '../admin/SMS.php';
$balance=$_POST['balance'];
$amount=$_POST['amount'];
//$phone=$_POST['phone'];
$transID=rand(1500, 9999);
$refcode='UN'.$transID.'MU';


// Select farmers details
$Rsql="SELECT *
FROM farmers
WHERE TeaNumber = '$farmer'";
$Rresult=mysqli_query($connect,$Rsql);
while ($row=mysqli_fetch_array($Rresult))
{
 //echo $username;
 $fname=$row['FName'];
 $lname=$row['LName'];
 $fullName=$fname.' '.$lname;
 $PhoneN=$row['Phone'];
$phone=str_replace("+254","0",$PhoneN);
}
$myname=strtoupper($fullName);
// Select Currrent Balance
$Balance="SELECT Balance
FROM account
WHERE TeaNumber = '$farmer'
ORDER BY TransID DESC
LIMIT 1";

$Balance=mysqli_query($connect,$Balance);
$Balance=mysqli_fetch_assoc($Balance);
$Balance= $Balance['Balance'];
if($amount>$Balance){
  echo "Insufficient Account Balance to make this request!";
  exit;
}
else{
  $CBalance= $Balance-$amount;
}

  $date= date("yy/m/d");

				$sql="INSERT INTO account (TeaNumber,Date,Amount,TransType,Balance,RefCode) VALUES('$farmer','$date','$amount','Withdraw','$CBalance','$refcode')";

				$result=mysqli_query($connect,$sql);

				if($result) {

      echo " Withdrawal requested of Kshs.$amount has been initiated to $phone";
      $text="Dear $myname, You have initiated a Withdrawal request of KES.$amount to $phone.Kindly await MPESA Confirmation Message. Reference Code.$refcode ";

      require_once('../admin/SMS.php');
}
        else {
            echo $connect->error;
          }

			?>
