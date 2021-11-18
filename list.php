<?php
$sql = "SELECT id, vrsta, boja, slika, velicina, cijena FROM Proizvodi";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
    echo '<div class="proizvod">', '<img src='.$row["slika"].' width="100%" height="200px">', '<br>'. $row["id"]. " - Naziv proizvoda: " . $row["boja"]." "  . $row["velicina"]." " . $row["vrsta"]. " " . $row["cijena"]."KM", '</div>';
  }
} else {
  echo "0 results";
}
$conn->close();
?>