<html>
    <head>
        <title>Imaging</title>
        <link rel="stylesheet" type="text/css" href="../CSS/cam.css">
        <link rel="stylesheet" type="text/css" href="../CSS/index.css">
     <style type="text/css">

        #results { padding:20px; border:1px solid; background:#ccc; }

    </style>

</head>
<body>
<ul>
  <li><a href="../Views/fileUpload.php">Home</a></li>
  <li><a href="edit.php">Edit Profile</a></li>
  <li><a href="#contact">Gallery</a></li>
  <li style="float:right"><a class="active" href="../Controllers/logout.php">Logout</a></li>
</ul>
<?php
    require ("../Models/model.php");
    $image_array = getAllImages();

    foreach ($image_array as $image) {
        echo '<img src="'. $image['picture'] .'" alt="" class="src"></br>'.
        '<button>Like</button>'.
        '<input type="text" name="comment" placeholder="type comment here ...">'.
        '<button>Comment</button><br>';
    }
?>
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