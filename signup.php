<?php

session_start();

    include("connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    // some data was input into the table
    $username = $_POST['txtusername'];
    $password = $_POST['txtpasswd'];

    if(!empty($username) && !empty($password) && !is_numeric($username))
            {
                //save to database
                $query = "insert into staff(username, password) values('$username', '$password')";
                mysqli_query($con, $query);

                header ("Location: login.php");
            }else
                {
                    echo "please enter valid data";
                }
            
          
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>signin</title>
</head>
<body>
    <div id="login">
        <form action="signup.php" method="post">
            <div style="font-size: 20px; margin:10px;">Signup Page</div>
            Username<br/>
            <input id="text" type="text" name="txtusername"/><br/><br/>
            Password<br/> 
            <input id="text"type="text" name="txtpasswd"/><br/><br/>

            <input id="button" type="submit" value="REGISTER"/><br/><br/>
            <a href="login.php">Click to login</a><br/>
        </form>
    </div>
</body>
</html>