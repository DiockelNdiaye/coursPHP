<?php

$longueur = readline('Veuillez renseigner la longueur : ');
$largeur  = readline('Veuillez renseigner la largueur : ');

function perimetre($longueur, $largeur) {
  return ($longueur + $largeur) * 2;
}

function demi_perimetre($longueur, $largeur) {
  return perimetre($longueur, $largeur) / 2;
}