
<?php
  include("db_connect.php");
  date_default_timezone_set("Asia/Dhaka");
  echo "The time is " . date("h:i:sa");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h1>Login Page</h1>
    <form method="post" action="adminprocess_login.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="pass_word">Password:</label>
        <input type="password" name="pass_word" id="pass_word" required><br>

        <input type="submit" name="submit" value="Log In">
    </form>
</body>
</html>
