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
  <li><a href="#info">Info</a></li>
  <li><a href="insert.php">Registracija</a></li>
  <li><a href="#kontakt">Kontakt</a></li>
  <li><a href="cart.php">Cart</a></li>
</ul>
  <div class="wrapper">
     
      <h1>Shopping</h1>  
    
      
      <?php include 'controller.php';?>
<?php include 'listproizvod.php';?>

</div>

	
    <div class="footer">
  <h2>Sva prava zadržana | 2021</h2>
  </div>

  </body>
</html>