<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="index.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <style type="text/css">

        #results { padding:20px; border:1px solid; background:#ccc; }

    </style>

</head>
<body>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="edit.php">Edit Profile</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a class="active" href="login.php">Logout</a></li>
</ul>
     
    </div>
<div id = "signup">
        <form action= "editpro.php" method = "post" style="margin-top: 100px;">
             <img src = "user.jpg" width = "300" height = "300">
            <p id = "errmsg">
            </p>
            <input  type= "text" name="username" placeholder="Username" required/>
            <br/>
            <input  type= "email" name="email" placeholder="example@domain.com" required/>
            <br/>
            <input  type= "password" name="passwd" placeholder="P******" required/>
            <br/>
    
            <input  type= "submit" name="submit" value = "Save"/>
        </form>
        <div class="div_pic" style = "background-image: url('logback.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center; width:500px">
        </div>
    </div>
    <div class="footer" style="    background:  royalblue;
    position: absolute;
    bottom: 0;
    left: 0;
    hieght :200%;
    overflow: hidden;
    width: 100%;">
    <center><p style="display:inline; color:white"> &copy uisrael </p></center>
</div>
</body>
</html>