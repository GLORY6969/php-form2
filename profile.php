<?php
ob_start(); 
session_start();
if(!empty($_SESSION['f_name'])){
echo "Your Profile:" . "<br>". "<br>";
echo $_SESSION['f_name']." " ;
echo $_SESSION['s_name'] . "<br>";
echo $_SESSION['email'] . "<br>";
echo $_SESSION['phone'] . "<br>";
}else{
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="profile">
    <br>
    <h3></h3>
    <a href="logout.php">Logout</a>
</body>

</html>


<?php


ob_end_flush();
?>