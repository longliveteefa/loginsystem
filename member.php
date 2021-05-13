<?php
session_start();

include "drop.php";
include_once "member.html";

$name = $_SESSION['userdata'];


if(empty($_SESSION['userdata'])){

    header("Location:login.php");


}else{
    echo "<h1>Welcome Home ,$name</h1>";
    echo "<br>";
    echo "<a href=logout.php>Logout</a> ";
}

footer();