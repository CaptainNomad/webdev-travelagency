<?php
session_start();
?>

<!doctype html>
<html>
 <head> 
  <title>profile page</title> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
  <!-- jQuery library --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <!-- Popper JS --> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
  <!-- Latest compiled JavaScript --> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
  <link href="https://fonts.googleapis.com/css?family=Bungee Inline" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Alegreya SC" rel="stylesheet"> 

  <link rel="stylesheet" href="profile.css">
   
</head>
<body>
  <div class="profile"> 
   <h2>MY PROFILE</h2> 
   <ul style="list-style-type:none;"> 
    <li style="font-size:25px;">username: <?php echo $_SESSION["user"]?></li> 
    <hr> 
    <li style="font-size:25px;">email id: <?php echo $_SESSION["email"]?></li> 
    <hr> 
    <li style="font-size:25px;">contact: <?php echo $_SESSION["contact"]?></li> 
   </ul> 
  </div> 
  <button class="btn btn-outline-primary" type="submit"><a href="logged_in_homepage.php">Home</a></button> 
  <button class="btn btn-outline-primary" type="submit"><a href="logout.php">Logout</a></button> 
 </body>
</html>