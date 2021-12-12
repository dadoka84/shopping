<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <div class="header">
    <h2>T-shirt shop</h2>
      </div>
    <ul>
  <li><a class="active" href="index.php">Naslovna</a></li>
   <li><a href="insert.php">Registracija</a></li>
  <li><a href="#kontakt">Kontakt</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="cart.php">Cart</a></li>
</ul>
  <div class="wrapper">
     
      <h1>Cart</h1>  
    
      
      <?php include 'controller.php';?>
      <div class="stil">


<?php
$sql = "SELECT id, proizvod, cijena, kolicina,  FROM carttbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
    echo '<div class="proizvod"><h2>Proizvodi</h2>'. $row["proizvod"],'<br>'. $row["cijena"],'<br>'. $row["kolicina"], '</div>';
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</div>
</div>

	
    <div class="footer">
  <h2>Sva prava zadržana | 2021</h2>
  </div>

  </body>
</html>