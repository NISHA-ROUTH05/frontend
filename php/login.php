<?php
 session_start();
$conn = mysqli_connect("localhost","root","","page");//for connecting database with database name "page"

?>
<html>
     <head>
        <meta charset="utf-8">
        <title>SHOPPING WEBSITE</title>
        <link rel="stylesheet" href="style.css">
     </head>
    <body>
        <?php

        if(isset($_POST['submit'])){//if the submit button is pressed then 
            $username=$_POST['username'];//two variable to store user information name and password
            $password=$_POST['password'];


            $query="select * from site where username='$username' && password='$password'";//to match the database 
            $run=mysqli_query($conn,$query);//to run the quary
            $total=mysqli_num_rows($run);//to check is the username and password presnt in single row if present means exist the return 1 else return o
             if($total==1){//if the login user is vallid or already register then send him to extra.php or home page for accessing
                $_SESSION['user_name']=$username;
                header('location:extra.php');
            }
            else{
                echo"login failed";//else print on login page that login failed
            }

            
        }
        ?>
        <div class="box">
        <img src="unnamed (2).jpg" class="avatar">
            <h2><center>LOGIN</center></h2>
            <form action="" method="POST">
                <div class ="inputbox">
                    <input type="text" name="username" required="" placeholder="enter your name">
                    <label>Username</label>
                 </div>
                 <div class ="inputbox">
                 <input type="password" name="password" required="" placeholder="enter password">
                    <label>Password</label>
                 </div>
                 <input type="submit" name="submit" value="submit">
            </form>
            </div>        
    </body>
</html>


