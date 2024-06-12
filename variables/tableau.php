<?php

$eleves = [
  [
    "prenom" =>"Jean",
    "nom" => "Diouf",
    "notes" => [10, 16, 17]
  ],
  [
    "prenom" =>"Marie",
    "nom" => "Ndiaye",
    "notes" => [13, 15, 19]
  ],
  [
    "prenom" =>"Pierre",
    "nom" => "Dione",
    "notes" => [9, 12, 14]
  ],
  [
    "prenom" =>"Sophie",
    "nom" => "Faye",
    "notes" => [13, 16, 17]
  ],
  [
    "prenom" =>"Emma",
    "nom" => "Senghor",
    "notes" => [12, 20, 16]
    ]
];

foreach ($eleves as $key => $eleve) {
  print_r($eleve);
}