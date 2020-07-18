<!doctype html>
<html>
 <head> 
  <title>Welcome to our website!</title> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@423&amp;display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="styles.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
  <!--<link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css">--> 
  <style>
*{
box-sizing:border-box;
font-family: 'Josefin Sans', sans-serif;
}
body{
 margin:0;
 background:white;
 }
 nav{
   background:grey;
   width:100%;
   overflow:auto;
 }
ul{
 margin:0;
 padding:0;
 list-size: none ;
 }
 li{
   display: flex;
   float: left;
 }


.carousel-inner img {
    width: 100%;
    height:auto;
    border: 1px solid black;
  }

 nav a{
   width:  100px  ;
   display: block;
   text-decoration:  none ;
   text-align: center;
   background: grey;
   font-size: 15px;
   color: black ;
   padding: 10px ;
   
 } 
 nav a:hover{
   background:white ;
   color:black ;
 }

* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}
.responsive {
  width: 100%;
  max-width: 100%;
  height: auto;
  border-radius:5px;
}
.row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}


.column {
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  border:1px solid white;
}
.text{
  text-align: center;
  text-size:15px;
  border: 1px solid black;
  
}
.glow{
font-size: 20px;
  color: black;
  text-align: center;
}
  </style> 
 </head> 
 <body> 
  <nav> 
   <ul class=" text-center text-capitalize "> 
    <li><a href="#"> <i class="fa fa-home"></i> home</a></li> 
    <li><a href="#"> <i class="fas fa-plane-departure"></i> profile</a></li> 
    <li><a href="#"> <i class="fa fa-search"></i> search</a></li> 
    <li><a href="login.php"> <i class="fa fa-user"></i> login</a></li> 
   </ul> 
  </nav> 
  <header> 
   <div id="demo" class="carousel slide" data-ride="carousel"> 
    <ul class="carousel-indicators"> 
     <li data-target="#demo" data-slide-to="0" class="active"></li> 
     <li data-target="#demo" data-slide-to="1"></li> 
     <li data-target="#demo" data-slide-to="2"></li> 
    </ul> 
    <div class="carousel-inner"> 
     <div class="carousel-item active"> 
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS_ZWqf9GYmwPNAc2f__pckjMp-8AjhgfpVxA&amp;usqp=CAU" alt="Los Angeles" width="1100" height="500"> 
      <div class="carousel-caption"> 
       <h3>Los Angeles</h3> 
       <p>We had such a great time in LA!</p> 
      </div> 
     </div> 
     <div class="carousel-item"> 
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTlIv0HXYn88i7D_J3AMDQUm5FLeMysD95aGQ&amp;usqp=CAU" alt="Chicago" width="1100" height="500"> 
      <div class="carousel-caption"> 
       <h3>Paris</h3> 
       <p>Thank you, Paris!</p> 
      </div> 
     </div> 
     <div class="carousel-item"> 
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSZP7utRSuK1zv9Si8xo5qolX6qyFzqTaohLQ&amp;usqp=CAU" alt="New York" width="1100" height="500"> 
      <div class="carousel-caption"> 
       <h3>New York</h3> 
       <p>We love the Big Apple!</p> 
      </div> 
     </div> 
    </div> 
    <a class="carousel-control-prev" href="#demo" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> 
    <a class="carousel-control-next" href="#demo" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> 
   </div> 
  </header> 
  <section> 
   <br> 
   <div class="container"> 
    <h1 style=" text-shadow:5px 5px 10px black;text-size:50px  " class=" text-center text-capitalize pt-5">TOP DESTINATIONS <i style="font-size:36px;" class="fas fa-plane-departure"></i> </h1> 
    <hr class="w-25 mx-auto pb-5"> 
    <div class="row"> 
     <div class="column"> 
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSkBNQ3SiGXtiGGGzz2DYpVbQ8F_02zqr6pgg&amp;usqp=CAU" class="responsive" alt="Forest" style="width:100%"> 
     </div> 
     <div class="column"> 
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSZP7utRSuK1zv9Si8xo5qolX6qyFzqTaohLQ&amp;usqp=CAU" class="responsive" alt="Forest" style="width:100%"> 
     </div> 
     <div class="column"> 
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQT-t_0Kw1VtSWnyjCXt4-5u9laRv7KiRJ3VA&amp;usqp=CAU" class="responsive" alt="Mountains" style="width:100%"> 
     </div> 
     <div class="column"> 
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQK0DGDZb42uj-bnL3cI3KyCCm9mqAoew6SPQ&amp;usqp=CAU" class="responsive" alt="Mountains" style="width:100%"> 
     </div> 
    </div> 
    <br> 
    <button type="button" class="btn btn-success" data-target="#mymodal" data-toggle="modal">Sign Up here</button> 
    <div class="modal" id="mymodal"> 
     <div class="modal-dialog modal-dialog-centered"> 
      <div class="modal-contnent "> 
       <div class="modal-content"> 
        <!--header part--> 
        <div class="modal-header"> 
         <h3 class="text-center text-capitalize pt-5">SIGN-UP</h3> 
         <button type="button" class="close" data-dismiss="modal">×</button> 
        </div> 
        <!--Modal body--> 
        <div class="modal-body"> 
        <div class="container"> 
         <form action="signup.php" method="post"> 
          <label for="usrname"> Username</label> 
          <input type="text" id="usrname" name="usrname" required> <br>
          <label for="email">Email</label>
          <input type="text" id="email" name="email"><br>
          <label for="psw">Password</label> 
          <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> <br>
          <label for="re_password">Confirm-Password</label>
          <input type="password" id="re_password" name="re_password"><br>
          <label for="contact">contactno</label> 
          <input type="mobile number" id="contact" name="contact"> 
          <br> 
           <input type="checkbox" name="reminder">REMEMBER ME 
           <button type="submit" class="btn btn-success">SIGN-IN</button> 
          </form> 
         </div> 
        </div> 
        <div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
    <br> 
    <br> 
    <div class="text"> 
     <p><div><b> WELCOME!</b></div>
     <div> We provide the best packages for our customers to travel around the globe with ease and comfort at affordable rates!</div>
     <div>Sign up or Login to Explore our website.</div></p> 
    </div> 
   </div> 
  </section> 
  <br> 
  <!--About Us ends--> 
  <div class="glow"> 
   <h5> DIAL US <i class="fa fa-phone"></i> </h5> contact:263883839 
   <br> contact:263673774 
  </div> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
 </body>
</html>