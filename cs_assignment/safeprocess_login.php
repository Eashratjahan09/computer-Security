<?php
  include("db_connect.php");

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'PHPMailer-master/src/Exception.php';
  require 'PHPMailer-master/src/PHPMailer.php';
  require 'PHPMailer-master/src/SMTP.php';




  if(isset($_POST['submit'])){
    $code = rand(100000, 999999);
    $username = mysqli_real_escape_string($connect,$_POST['username']);
    $password = mysqli_real_escape_string($connect,$_POST['pass_word']);
    // echo "$username";
    // echo"$password";
    $sql = "SELECT * FROM `users` WHERE username='$username'AND pass_word='$password'";
	$result = mysqli_query($connect, $sql);
	$data = $result->fetch_assoc() ;
	$num = mysqli_num_rows($result);
	if ($num == 1){
       
        
   

        $mail=new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username='mkwk670@gmail.com';
        $mail->Password='nrlquokkfpcocjxa';
        $mail->SMTPSecure='ssl';
        $mail->Port=465; #587
        $mail->setFrom('mkwk670@gmail.com');
        $mail->addAddress($username);
        $mail->Subject="Your Login code ";
        $mail->Body="Your code is: $code ";
        $mail->send();
		
        session_start();
        $_SESSION['originalcode']=$code;
        $_SESSION['username']=$username;
		
		header("location: code.php");
		
	}
	else{
		echo"not login";
	}





   }


?>
