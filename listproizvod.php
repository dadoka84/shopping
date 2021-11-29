<?php include 'controller.php';?>
<?php require_once('functions.php');?>
    


<div class="stil">


<?php
$id = intval($_GET['id']);
$sql = "SELECT vrsta, boja, slika, velicina, cijena FROM Proizvodi WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
    echo '<div class="proizvodveliki">', '<img src='.$row["slika"].' width="30%" height="200px">', '<br>' , '<div class="naziv">'. $row["boja"]," " . $row["velicina"]." " . $row["vrsta"]. "</div>  " , '<div class="cijena">Već od '. $row["cijena"].'KM</div>','<br><span class="text">Količina</span> 
    <input type="range" value="1" min="1" max="100" oninput="this.nextElementSibling.value = this.value">
<output>1</output>
    <form action="upload.php" method="post" enctype="multipart/form-data">
  Izaberi sliku za upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Posalji" name="submit">
</form> 
    
    <div class="container"><button class="dugme"><a href="index.php">U košaricu</a></button><button><a href="proizvod.php?id='.$row["id"],'">Personaliziraj proizvod</a></button></div>', '<br/><br><h2>Tehnologija izrade</h2><span class="opis">Štampamo tzv DTG  tehnologijom (Direct To Garment) direktno na tkaninu. Koristimo jako kvaltetne majice FRUIT OF THE LOOM .  Odaberite model, veličinu i boju, te dodajte sliku u polje ne dnu koje je predviđeno za "UPLOAD"    
    Nakon odabrane količine i potvrde vaše narudžbe, pristupit ćemo obradi. Kada se narudžba obradi i pregleda vaša slika, majica se pušta u štampu.    
    Obično je za izradu i slanje majice na adresu potrebno 24 sata, tako da majicu možete očekivati na vašoj adresi u roku od dva radna dana od dana narudžbe.</span>
     <div>'. izracunCijene() ,' </div>
    </div>';
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</div>