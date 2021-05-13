<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<?php

$name = $_SESSION['userdata'];


if(empty($_SESSION['userdata'])){

    header("Location:login.php");


}else{
    echo "<h1>Welcome Home ,$name</h1>";
    echo "<br>";
    echo "<a href=logout.php>Logout</a> ";
}
?>

</body>
</html>