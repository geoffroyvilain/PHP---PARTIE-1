<?php
//permet de typer et eviter les problèmes de conversion,surtout utilisé pour les nouvelles versions de php
// ici on initialise et on type avec la fonction settype , ici avec  la variable $int en int
//settype($int,'int');
// On initialise avec NULL, c'est littéralement rien
$age = NULL;
?><!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP - PARTIE 1 - EXO 5</title>
</head>
<body>
  <h1>Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.
    Donner une valeur à cette variable et l'afficher.</h1>
    <!-- on affiche la variable $age -->
    <p>1ère valeur : <?php echo $age; ?></p>
    <!-- AFFECTER UNE NOUVELLE VALEUR A LA VARIABLE -->
    <?php $age = 33; ?>
    <p>2ème valeur : <?php echo $age; ?></p>
  </body>
  </html>
