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
     
      <h1>Korisnici</h1>  
      <button> <a href="insert.php">Nazad</a></button>
    
      
      <?php include 'controller.php';?>
      <div class="stil">


<?php
$sql = "SELECT id, ime, prezime, email, slika, adresa FROM tblusers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
    echo '<div class="proizvod"><h2>Korisnik</h2><img src='.$row["slika"],' width="100%" height="200px">'. $row["ime"],'<br>'. $row["prezime"],'<br>'. $row["email"],'<br>'. $row["adresa"], '</div>';
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