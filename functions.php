<?php


function finalnaCijena($osnovnaCijena,$velicina,$boja,$slika) {
   $cijena = 0;
   $izracunataCijena = $osnovnaCijena * $boja;
   $cijena = (($izracunataCijena * $velicina) + $slika) * 5;
  return $cijena;

}






?>

