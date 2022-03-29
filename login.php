<?php
session_start();

    include("connection.php");
    //include("funtions.php");

    //$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <div id="login">
        <form action="" method="post">
            <div style="font-size: 20px; margin:10px;">Login Page</div>
            Username<br/>
            <input id="text" type="text" name="txtusername"/><br/><br/>
            Password<br/> 
            <input id="text"type="text" name="txtpasswd"/><br/><br/>

            <input id="button" type="submit" value="LOGIN"/><br/><br/>
            <a href="signup.php">Click to Signup</a><br/>
        </form>
    </div>
</body>
</html>