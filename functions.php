<?php

function izracunCijene($a,$b,$c) {
   return $a*$b*$c;
}

function finalnaCijena($osnovnaCijena,$velicina,$boja,$slika) {
   $cijena = 0;
   $cijena = ($osnovnaCijena + $velicina + $boja + $slika) * 5;
  return $cijena;

}






?>

