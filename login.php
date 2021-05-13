<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
    <label>
    Username :
    </label>
    <input type="text" name="username">
    <label>
    Password : 
    </label>
    <input type="password" name="password">
    <input type="submit" value="Login">
    </form>

<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){

//db

$username = "mustafa";
$password = "123456";

    if($username == $_POST['username'] && $password == $_POST['password']){

        $_SESSION['userdata'] = $_POST['username'];
        header("LOCATION:member.php");
    
    }else{
        header("LOACTION:login.php");
    
    }


    if($_POST['username'] != $username){

        echo "Username is  wrong";
    
    }


    if($_POST['password'] != $password){
        echo "<br>";
        echo "Password is wrong";
    }


    if (isset($_SESSION['userdata'])){

        header("Location:member.php");
    
    }else{
        echo "<br>";
    }

}
?>
</body>
</html>