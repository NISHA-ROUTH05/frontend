<?php
$conn = mysqli_connect("localhost","root","","page");

?>
<html>
     <head>
        <meta charset="utf-8">
        <title>SHOPPING REGISTRATION</title>
        <link rel="stylesheet" href="style2.css">
     </head>
    <body>
        <?php

        if(isset($_POST['submit'])){//after submit all value shiuld be set
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];


            $query="insert into site(username,email,password)values('$username','$email','$password')";//for insrting the information in database
            $run=mysqli_query($conn,$query);//to run the quary 

            if($run)//if the quary is run means if register is succsessful then print successful register
            {
               echo" successful register";
            }
            else{
                echo"not successfully".mysqli_error($conn);//sql error function
            
        }}
        ?>
        <div class="box">
        <img src="unnamed (2).jpg" class="avatar">
            <h2><center>REGISTER</center></h2>
            <form action="" method="POST">
                <div class ="inputbox">
                    <input type="text" name="username" required="" placeholder="enter your name">
                    <label>Username</label>
                 </div>
                 <div class ="inputbox">
                    <input type="email" name="email" required="" placeholder="enter your email">
                    <label>E-mail</label>
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