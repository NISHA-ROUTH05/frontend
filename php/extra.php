<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
  
</head>
<body><?php
// start session to check the availibility of any session if present the resume that session
session_start();
error_reporting(0);// to handle the error if we search this home page then give an error that should is removed by this function
$_SESSION['user_name'];//sesion variable to print welcome username in home page
if($_SESSION['user_name']==true)//if the login user is already register only then he can excess the home page otherwise for searching home page send him to login page
{

}else{
    header('location:login.php');
}

echo"welcome    ".$_SESSION['user_name'];
?><br></br>

<img src="Iphone-5-Vs-Iphone-4S-Wallpaper-Hd-Wallpaper-Background-HD.jpg" height='400' weidth='10'>
<img src="69e6e51f073c3f3a6b0b160e828ba9fe.jpg" height='400' weidth='300'>


<img src="apparel-clothing-fashion-hangers-thumbnail.jpg" height='400' weidth='400'>
<img src="commonwealth-spring-2009-collection-1.jpg" height='400' weidth='500'>
<a href="logout.php">Log Out</a>



</body>
</html>