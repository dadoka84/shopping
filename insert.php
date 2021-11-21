<?php 
//Database Connection file
include('controller.php');
if(isset($_POST['submit']))
  {
  	//getting the post values
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $add=$_POST['address'];
   
  // Query for data insertion
     $query=mysqli_query($conn, "insert into tblusers( Ime, Prezime, Mobilni, Email, Adresa) value('$fname','$lname', '$contno', '$email', '$add' )");
    if ($query) {
    echo "<script>alert('Uspjesno uneseno');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Doslo je do greske, pokusajte ponovo!');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
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
     
      <h1>Registracija</h1>  
      <button> <a href="korisnici.php">Svi korisnici</a></button>
               <div class="signup-form">
    <form  method="POST">
		<h2>Unesite podatke</h2>
		<p class="hint-text">Ispunite formular!</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="fname" placeholder="First Name" required="true"></div>
				<div class="col"><input type="text" class="form-control" name="lname" placeholder="Last Name" required="true"></div>
			</div>        	
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="contactno" placeholder="Enter your Mobile Number" required="true" maxlength="10" pattern="[0-9]+">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Enter your Email id" required="true">
        </div>
		
		<div class="form-group">
            <textarea class="form-control" name="address" placeholder="Enter Your Address" required="true"></textarea>
        </div>        
      
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Posalji</button>
        </div>
    </form>
	<div class="text-center">Pregledaj vec uneseno!!  <a href="index.php">Pocetna</a></div>
 
</div>

</div>

	
    <div class="footer">
  <h2>Sva prava zadržana | 2021</h2>
  </div>

  </body>
</html>