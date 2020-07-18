<?php
//start a new session
session_start();

//server and databse details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "places";

//create conenction
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed");
}


?>

<!doctype html>
<html>
 <head> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
  <!-- jQuery library --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <!-- Popper JS --> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
  <!-- Latest compiled JavaScript --> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="search.css"> 
 </head> 
 <body> 
  <form class="example" action="placeSearch.php" method="post"> 
   <input type="text" placeholder="Search.." name="search"> 
   <button type="submit"><i class="fa fa-search"></i></button> 
  </form>
  
  <?php
//server and database details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "places";
$cart = "Add to cart";
$conn = new mysqli($servername, $username, $password, $dbname);

//if submit button is clicked
if ($conn->connect_error) {
  die("Connection Failed");
}


$sql = "SELECT place, no_of_days, price, no_of_people FROM trip_details";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  //fetch the result in an array
  while ($row = $result->fetch_assoc()) {
    ?>


    <!-- displaying the result -->

      <div class="col-md4">
              <form action="search.php" method="post">
                  <div style="border:1px solid; padding:16px;">
                  <p><?php echo $row["place"]?></p>
                  <p><?php echo  $row["no_of_days"];?></p>
                  <p><?php echo "No. Of People:"." ".$row["no_of_people"]?></p>
                  <p><?php echo "Price:"." ".$row["price"];?></p>
                  <input type="hidden" name="hidden_name" id="hidden_name" value="<?php echo $row["place"];?>">
                  <input type="hidden" name="hidden_price" value="<?php echo $row["price"]?>">
                  <input type="hidden" name="hidden_size" value="<?php echo $row["no_of_people"]?>">
                  <input type="submit" name="add_to_cart" value="View">
                  </div>
              </form>
          </div>

    <?php
  }
} else {
  echo "0 results found";
}

$conn->close();
?>

  
 </body>
</html>