<?php
require '../login/connection.php';


$sql="SELECT * FROM staff";
$result=mysqli_query($connect,$sql);
 if(mysqli_num_rows($result)>0) {
  while($row=mysqli_fetch_assoc($result)){
    if($row['Role']=='Driver') {
      $Drivers[]=$row;
    }else {
      $clerks[]=$row;
    }
  }
}

$sql1="Select * FROM buyingcenter";
$result=mysqli_query($connect,$sql1);
 if(mysqli_num_rows($result)>0) {
  while($row=mysqli_fetch_assoc($result)){
  $bcenters[]=$row;
  }
}


 ?>
