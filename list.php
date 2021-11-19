<div class="stil">


<?php
$sql = "SELECT id, vrsta, boja, slika, velicina, cijena FROM Proizvodi";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
    echo '<div class="proizvod">', '<img src='.$row["slika"].' width="100%" height="200px">', '<br>' , '<div class="naziv">'. $row["boja"]," " . $row["velicina"]." " . $row["vrsta"]. "</div>  " , '<div class="cijena">'. $row["cijena"].'KM</div>','<br><button class="dugme"><a href="index.php">U košaricu</a></button><button><a href="index.php">Odaberi proizvod</a></button>', '</div>';
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</div>