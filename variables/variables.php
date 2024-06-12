<?php

// Cours PHP pour débutants : Les Variables
// -----------------------------------------
// Les variables en PHP sont des conteneurs pour stocker des informations.
// Elles peuvent contenir divers types de données, telles que des chaînes de caractères,
// des nombres entiers, des nombres à virgule flottante, des tableaux, 
// etc. Une variable en PHP commence toujours par le signe dollar $, 
// suivi du nom de la variable.

// Déclaration d'une variable nommée $prenom avec la valeur "John"
$prenom = "John";
// Déclaration d'une variable nommée $age avec la valeur 25
$age = 25;



// Types de données :
// ------------------
// PHP est un langage de typage dynamique, ce qui signifie que vous 
// n'avez pas besoin de spécifier le type de données lors de la 
// déclaration d'une variable. PHP détermine automatiquement le 
// type approprié en fonction de la valeur attribuée à la variable.



// Concaténation de variables :
// ----------------------------
// Pour concaténer (c'est-à-dire joindre) des variables avec du texte en 
// PHP, vous pouvez utiliser le point .. 
// Voici un exemple :

$prenom = "John";
$age = 25;
// Concaténation de variables avec du texte
echo "Bonjour, je m'appelle " . $prenom . " et j'ai " . $age . " ans.";


// Modification de variables :
// ---------------------------
//   Vous pouvez modifier le contenu d'une variable en lui attribuant une 
//   nouvelle valeur. 
//   Voici un exemple :

$compteur = 10;
$compteur = $compteur + 1; // Incrémente $compteur de 1
echo $compteur; // Affiche 11