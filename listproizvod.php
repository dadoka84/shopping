<?php include 'controller.php';?>
<?php include 'globals.php';?>
<?php require_once('functions.php');?>
    


<div class="stil">
<?php 
//Database Connection file
if(isset($_POST['submit']))
  {
  	//getting the post values
  
    $personId=intval($_GET['personId']);
    $productId=intval($_GET['id']);
    $boja=$_POST['boja'];
    $velicina=$_POST['velicina'];
    $kolicina=$_POST['kolicina'];
    $proizvod=$_POST['proizvod'];
   
  // Query for data insertion
  $query=mysqli_query($conn, "insert into tblselected(personId, productId, boja, velicina, kolicina, proizvod ) value('$personId','$productId','$boja', '$velicina', '$kolicina', '$proizvod' )");
  if ($query) {
  echo "<script>alert('Uspjesno uneseno');</script>";
  echo "<script type='text/javascript'> document.location ='proizvod.php'; </script>";
  }
  else
    {
      echo "<script>alert('Doslo je do greske, pokusajte ponovo!');</script>";
    }
}
?>
<h2>Dosadašnje narudžbe korisnika</h2>
<?php
$id = intval($_GET['id']);
$personId=intval($_GET['personId']);
$sql = "SELECT boja, velicina, kolicina, proizvod FROM tblselected WHERE personId=$personId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
    echo '<div class="tblselected"><div class="naziv">Proizvod: '. $row["proizvod"],'<br><span class="kolicina"> Boja: '. $row["boja"],"<br> Veličina:  " . $row["velicina"]." " . $row["vrsta"]. "</span></div>  " , '<div class="kolicina">Naručena količina: '. $row["kolicina"].' komada.</div></div>'
    ;
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<hr>
<h1>Nova narudžba</h1>
    <h3>Korak 1</h3>
    <form method="post">
    <label for="proizvod" class="text">Izaberite proizvod:</label>
<select id="proizvod" name="proizvod">
  <option value="Majica kratkih rukava">Majica kratkih rukava</option>s
  <option value="Majica dugih rukava">Majica dugih rukava</option>
  <option value="Dukserica">Dukserica</option>
  <option value="Kačket">Kačket</option>
</select><br>    <br>

<label for="boja" class="text">Izaberite boju:</label>
<select id="boja" name="boja">
  <option value="crna">Crna</option>
  <option value="bijela">Bijela</option>
  <option value="plava">Plava</option>
  <option value="zuta">Žuta</option>
  <option value="crvena">Crvena</option>
  <option value="zelena">Zelena</option>
  <option value="roza">Roza</option>
</select><br>    <br>
<hr>
<h3>Korak 2</h3>
<label for="velicina" class="text">Izaberite veličinu:</label>
<select id="velicina" name="velicina">
  <option value="s">S</option>
  <option value="m">M</option>
  <option value="l">L</option>
  <option value="xl">XL</option>
  <option value="xxl">XXL</option>

</select><br> <br> <hr>
<h3>Korak 3</h3>
    <span class="text">Količina</span> 
    <!-- input slider
    <input type="range" value="1" min="1" max="100" oninput="this.nextElementSibling.value = this.value" name="kolicina">
<output>1</output> -->
<input type="number" id="kolicina" name="kolicina"
       min="1" max="100">

<br>
<input type="submit" value="Posalji" name="submit">
</form>
<hr>

    <form action="upload.php" method="post" enctype="multipart/form-data">
  Izaberi sliku za upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Posalji" name="submit">
</form> <hr>
<h3>Ukupna cijena je: <?php echo finalnaCijena(2,3,4,2) ?>KM</h3><br>
    <div class="container"><button class="dugme"><a href="index.php">U košaricu</a></button><button><a href="proizvod.php?id='.$row["id"],'">Personaliziraj proizvod</a></button></div>
    
    <br><hr><strong>Tehnologija izrade</strong><br><br><span class="opis">Štampamo tzv DTG  tehnologijom (Direct To Garment) direktno na tkaninu. Koristimo jako kvaltetne majice FRUIT OF THE LOOM .  Odaberite model, veličinu i boju, te dodajte sliku u polje ne dnu koje je predviđeno za "UPLOAD"    
    Nakon odabrane količine i potvrde vaše narudžbe, pristupit ćemo obradi. Kada se narudžba obradi i pregleda vaša slika, majica se pušta u štampu.    
    Obično je za izradu i slanje majice na adresu potrebno 24 sata, tako da majicu možete očekivati na vašoj adresi u roku od dva radna dana od dana narudžbe.</span>

    </div>

</div>