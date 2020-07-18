<!doctype html>
<html lang="en">
 <head> 
  <title>Login Page</title> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="login.css">
   
 </head> 
 <body> 
  <div class="bg-img"> 
   <form action="validateLogin.php" class="container" method="post"> 
    <h1>Login</h1> 
    <label for="usr"><b>username</b></label> 
    <input type="text" placeholder="Enter Username" name="username" required> 
    <label for="psw"><b>Password</b></label> 
    <input type="password" placeholder="Enter Password" name="password" required> 
    <button type="submit" class="btn">Login</button> 
   </form> 
  </div> 
 </body>
</html>