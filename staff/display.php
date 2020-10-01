<?php

session_start();
 include '../login/connection.php';
$staff=$_SESSION['staff'];
$username=$staff;
 $Rsql="select * from staff WHERE Username= '$staff'";
 $Rresult=mysqli_query($connect,$Rsql);
 while ($row=mysqli_fetch_array($Rresult))
 {
  $name=$row['Name'];
  $role=$row['Role'];
 }
 //Schedules
 $user="SELECT StaffID FROM staff WHERE Username='$staff'";
 $user=mysqli_query($connect,$user);
 $user=mysqli_fetch_assoc($user);
 $user=$user['StaffID'];


 $Uquery="SELECT * FROM collection WHERE Driver='$user' OR Clerk='$user'";
 $Uresult=mysqli_query($connect,$Uquery);
   //die(mysqli_error($connect));
  if(mysqli_num_rows($Uresult)>0) {
   while($row=mysqli_fetch_assoc($Uresult)){
   $schedules[]=$row;
   }
   // print_r($schedules) ;
   // exit;
  }


 ?>
