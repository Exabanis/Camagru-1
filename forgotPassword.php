<?php
    require 'forgot.php';
?>
<html>
    <head>
        <title>Camagru | Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
        <h2>Forgot Password</h2>
        </div>

        <div class = "form">
        <form method="post" action="login.php">
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter Username..."required>
            </div>
            
            <div class="input-group">
                <label>Old Password</label>
                <input type="password" name="password" placeholder="Enter Your Old Password..."required>
            </div>
            <div class="input-group">
                <label>New Password</label>
                <input type="password" name="password" placeholder="Enter Your New Password..."required>
            </div>
             <div class="input-group">
                <label>Email</label>
                <input type="text" name="email" placeholder="Enter Email..."required>
            </div>
            <div class="input-group">
                <button type="submit" name="login" class="btn">Change Password</button>
            </div>
            <div>
                
            
            </div>
        </form>
          
    <div>
    </body>
</html>