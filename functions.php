<?php


function finalnaCijena($proizvod,$velicina,$boja,$slika,$kolicina) {
   $cijena = 0;
   $cijena = $proizvod + $velicina + $boja + $slika;
   $izracunataCijena = $cijena * $kolicina;
  return $izracunataCijena;

}






?>

