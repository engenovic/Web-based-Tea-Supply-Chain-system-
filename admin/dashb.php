<?php

 include '../login/connection.php';
 // Total number of Registered Farmers
 $Fresult = mysqli_query($connect, "SELECT * FROM farmers" );
 $Fnum_rows = mysqli_num_rows($Fresult);
 // Total Tea Supplies
 $Presult = mysqli_query($connect, "SELECT * FROM package" );
 $Pnum_rows = mysqli_num_rows($Presult);
 // Transactions
 $Aresult = mysqli_query($connect, "SELECT * FROM account" );
 $Anum_rows = mysqli_num_rows($Aresult);

 //Tea Supplies

 $Tquery="SELECT farmers.TeaNumber,CONCAT(farmers.FName,' ',farmers.LName) as fullName,farmers.IDNumber,farmers.Phone,farmers.CenterID,package.Date,package.Total,account.Balance
  FROM farmers JOIN package ON package.TeaNumber=farmers.TeaNumber JOIN account ON account.TeaNumber=farmers.TeaNumber LIMIT 10";
 $Tresult=mysqli_query($connect,$Tquery);
   //die(mysqli_error($connect));
  if(mysqli_num_rows($Tresult)>0) {
   while($row=mysqli_fetch_assoc($Tresult)){
   $supplies[]=$row;
   }
   // print_r($supplies) ;
   // exit;
  }
  //Farmer Transactions

  $Mquery="SELECT CONCAT(farmers.FName,' ',farmers.LName) as fullName,account.Balance,account.TransID,account.Date,account.TransType,account.Amount
   FROM farmers JOIN package ON package.TeaNumber=farmers.TeaNumber JOIN account ON account.TeaNumber=farmers.TeaNumber LIMIT 10";
  $Mresult=mysqli_query($connect,$Mquery);
    //die(mysqli_error($connect));
   if(mysqli_num_rows($Mresult)>0) {
    while($row=mysqli_fetch_assoc($Mresult)){
    $trans[]=$row;
    }
    // print_r($trans) ;
    // exit;
   }
   //Staff Allocation

   $Cquery="SELECT* FROM collection";
   $Cresult=mysqli_query($connect,$Cquery);
     //die(mysqli_error($connect));
    if(mysqli_num_rows($Cresult)>0) {
     while($row=mysqli_fetch_assoc($Cresult)){
     $staffs[]=$row;
     }
     // print_r($staffs) ;
     // exit;
    }
    //Users
    $Squery="SELECT* FROM staff";
    $Sresult=mysqli_query($connect,$Squery);
      //die(mysqli_error($connect));
     if(mysqli_num_rows($Sresult)>0) {
      while($row=mysqli_fetch_assoc($Sresult)){
      $users[]=$row;
      }
      // print_r($staffs) ;
      // exit;
     }
     // MPESA Withdrawals
     $Mpesa="SELECT* FROM withdraw";
     $Mpesa=mysqli_query($connect,$Mpesa);
       //die(mysqli_error($connect));
      if(mysqli_num_rows($Mpesa)>0) {
       while($row=mysqli_fetch_assoc($Mpesa)){
       $mpesas[]=$row;
       // print_r($mpesas) ;
       // exit;
       }
     }
     // Messages
     $mess="SELECT* FROM contact";
     $mess=mysqli_query($connect,$mess);
       //die(mysqli_error($connect));
      if(mysqli_num_rows($mess)>0) {
       while($row=mysqli_fetch_assoc($mess)){
       $messes[]=$row;
       // print_r($messes) ;
       // exit;
       }
     }
 ?>
