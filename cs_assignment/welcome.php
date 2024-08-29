<?php

include("db_connect.php");

 session_start();
 $username=$_SESSION['username'];

date_default_timezone_set('Asia/Dhaka');
// Get the current time
$current_time = date('Y-m-d H:i:s');






$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone"); 
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android"); 

  $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
  if($android){
    $sql = "INSERT INTO `activitylog`(`username`, `time`, `device`) VALUES ('$username','$current_time','Android')";
	$result = mysqli_query($connect, $sql);
    echo "android";
  } 
 elseif($iphone){
    $sql = "INSERT INTO `activitylog`(`username`, `time`, `device`) VALUES ('$username','$current_time','iphone')";
	$result = mysqli_query($connect, $sql);
    echo "iphone"; 
 }
elseif($ipod){
    $sql = "INSERT INTO `activitylog`(`username`, `time`, `device`) VALUES ('$username','$current_time','ipad')";
	$result = mysqli_query($connect, $sql);
    echo "ipad"; 
}
else { 
    $sql = "INSERT INTO `activitylog`(`username`, `time`, `device`) VALUES ('$username','$current_time','laptop or desktop')";
	$result = mysqli_query($connect, $sql);
    echo " laptop";
   } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<hi, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Login Successful!!</h1>
</body>
</html>