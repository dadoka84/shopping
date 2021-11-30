<?php include 'controller.php';?>
<?php include 'globals.php';?>
<?php require_once('functions.php');?>
    


<div class="stil">


<?php
$id = intval($_GET['id']);
$sql = "SELECT vrsta, boja, slika, velicina, cijena FROM Proizvodi WHERE id=$id";
$result = $conn->query($sql);
$kolicina = $_POST["output"];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
    echo '<div class="proizvodveliki">', '<img src='.$row["slika"].' width="30%" height="200px">', '<br>' , '<div class="naziv">'. $row["boja"]," " . $row["velicina"]." " . $row["vrsta"]. "</div>  " , '<div class="cijena">Već od '. $row["cijena"].'KM</div>','<br><hr>'
    ;
  }
} else {
  echo "0 results";
}
$conn->close();
?>

    <h3>Korak 1</h3>
    <label for="proizvod" class="text">Izaberite proizvod:</label>
<select id="proizvod" name="proizvod">
  <option value="kratka">Majica kratkih rukava</option>s
  <option value="duga">Majica dugih rukava</option>
  <option value="dukserica">Dukserica</option>
  <option value="kacket">Kačket</option>
</select><br>    <br>

<label for="boja" class="text">Izaberite boju:</label>
<select id="proizvod" name="boja">
  <option value="<?php $crna ?>">Crna</option>
  <option value="<?php $bijela ?>">Bijela</option>
  <option value="<?php $plava ?>">Plava</option>
  <option value="<?php $zuta ?>">Žuta</option>
  <option value="<?php $crvena ?>">Crvena</option>
  <option value="<?php $zelena ?>">Zelena</option>
  <option value="<?php $roza ?>">Roza</option>
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
    <input type="range" value="1" min="1" max="100" oninput="this.nextElementSibling.value = this.value">
<output>1</output>
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