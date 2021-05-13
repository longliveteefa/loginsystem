<?php
session_start();
 
include_once "template.html";

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
    
    }else{
        echo "Somthing wrong please make sure from your info and try again";
    }


    if($_POST['password'] != $password){
        echo "<br>";
        echo "Password is wrong";
    }else{
        echo "Somthing wrong please make sure from your info and try again";
    }


    if (isset($_SESSION['userdata'])){

        header("Location:member.php");
    
    }else{
        echo "<br>";
    }

}
?>
