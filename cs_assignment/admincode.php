<?php
if(isset($_POST['submit'])){
    $varifycode=$_POST['varify_code'];
    session_start();
    $maincode=$_SESSION['originalcode'];
    $var1 = (string) $maincode;
    if($varifycode==$var1){
        header("location: adminhome.php");
    } 
    else{
        echo "wrong code,try again later";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method='POST'>
        <labeL>Enter your code</labeL>
        <input type="password" name='varify_code'> 
        
        <input type="submit" name="submit" value="code">

    </form>
    
</body>
</html>