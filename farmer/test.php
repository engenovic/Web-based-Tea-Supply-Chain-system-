<?php
// Retrieve Current Balance
include '../login/connection.php';
// Select Currrent Balance
$Balance="SELECT Balance
FROM account
WHERE TeaNumber = 'UN456'
ORDER BY TransID DESC
LIMIT 1";

$Balance=mysqli_query($connect,$Balance);
$Balance=mysqli_fetch_assoc($Balance);
$Balance= $Balance['Balance']-$amount;
echo $Balance;
exit;
?>
