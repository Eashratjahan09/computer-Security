<?php
  include("db_connect.php");
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['pass_word'];
	// $usertype= $_POST['usertype'];
    // echo "$username";
    // echo"$password";
    $sql = "SELECT * FROM `users` WHERE username='$username'AND pass_word='$password'";
	$result = mysqli_query($connect, $sql);
	$data = $result->fetch_assoc() ;
	$num = mysqli_num_rows($result);
	// $usertype=mysql_fetch_array($result);
	if ($num == 1){
		
		
		header("location: welcome.php");
		
	}
	else{
		echo"not login";
	}





   }


?>
