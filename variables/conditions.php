<?php
// // PARTIE 1 : IF ELSE
//-----------------------
// // Donner la valeur de l'age
// $age = readline('Donner votre age : ');

// // Vérification si l'utilisateur est majeur ou mineur
// if($age >= 18) {
//     echo "Vous êtes majeur.";
// } else {
//     echo "Vous êtes mineur.";
// }

// //PARTIE 2 :
//-------------
// $action = readline("Donner votre : \n 1: retirer \n 2: déposer \n 3: annuler ");
// if($action == 1) {
//   echo "Vous voulez retirer combien : ";
// }else if($action == 2) {
//   echo "Vous voulez déposer combien : ";
// }else if($action == 3) {
//   echo "Votre opération a été annuler : ";
// }else{
//   echo "Aucun action ne corresponde à votre entrée : ";
// }





//SWICTH CASE : 
//--------------
// $action = readline("Entrez votre action : \n 1: retirer \n 2: déposer \n 3: annuler ");
// switch ($action) {
//     case 1:
//         echo "Vous voulez retirer combien : ";
//         break;
//     case 2:
//         echo "Vous voulez déposer combien : ";
//         break;
//     case 3:
//         echo "Votre opération a été annulée : ";
//         break;
//     default:
//         echo "Aucune action ne correspond à votre entrée : ";
// }





// PARTIE 1 : DO WHILE
//--------------------
// Dans cette version, nous utilisons une boucle do...while pour permettre à l'utilisateur de saisir à nouveau son 
// action si celle-ci n'est pas valide (c'est-à-dire si elle n'est pas 
// égale à 1, 2 ou 3). La boucle do...while garantit que le bloc de code 
// est exécuté au moins une fois avant de vérifier la condition de sortie.
// do {
//   $action = readline("Entrez votre action : \n 1: retirer \n 2: déposer \n 3: annuler ");
//   switch ($action) {
//       case 1:
//           echo "Vous voulez retirer combien : ";
//           break;
//       case 2:
//           echo "Vous voulez déposer combien : ";
//           break;
//       case 3:
//           echo "Votre opération a été annulée : ";
//           break;
//       default:
//           echo "Aucune action ne correspond à votre entrée : ";
//   }
// } while ($action != 1 && $action != 2 && $action != 3);




//PARTIE 2 : DO WHILE
//--------------------
// $nombre = 0;
// $tentatives = 0;
// do {
//     $nombre = readline("Entrez un nombre : ");
//     $tentatives++;

//     if ($nombre != 5 && $tentatives < 10) {
//         echo "Nombre incorrect. Essayez à nouveau.\n";
//     }
// } while ($nombre != 5 && $tentatives < 10);

// if ($nombre == 5) {
//     echo "Bravo ! Vous avez trouvé le nombre 5 en $tentatives tentatives.\n";
// } else {
//     echo "Vous avez dépassé le nombre maximum de tentatives.\n";
// }






//BOUCLE FOR
//------------
// Nous utilisons une boucle for pour exécuter le bloc de code jusqu'à ce que l'utilisateur
// trouve le nombre 5 ou jusqu'à ce qu'il ait effectué 10 tentatives.
// À chaque itération, nous demandons à l'utilisateur d'entrer un nombre 
// et nous incrémentons le nombre de tentatives.
// Si l'utilisateur entre le nombre 5, nous affichons un message de succès et sortons de la boucle à l'aide de break.
// Si l'utilisateur a dépassé le nombre maximum de tentatives (10), nous affichons un message approprié et sortons 
// également de la boucle à l'aide de break.
// Sinon, si l'utilisateur entre un nombre autre que 5 et qu'il n'a pas encore effectué 10 tentatives, 
// nous affichons un message d'erreur et continuons la boucle.
// $tentatives = 0;
// for ($i = 1; $i <= 10; $i++) {
//     $nombre = readline("Entrez un nombre : ");
//     $tentatives++;

//     if ($nombre == 5) {
//         echo "Bravo ! Vous avez trouvé le nombre 5 en $tentatives tentatives.\n";
//         break;
//     } elseif ($tentatives >= 10) {
//         echo "Vous avez dépassé le nombre maximum de tentatives.\n";
//         break;
//     } else {
//         echo "Nombre incorrect. Essayez à nouveau.\n";
//     }
// }

