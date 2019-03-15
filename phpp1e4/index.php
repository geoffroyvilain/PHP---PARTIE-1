<!-- ICI ON DECLARE ET INITIALISE LES VARIABLES -->
<!-- SEUL STRING PREND DES QUOTES -->
<?php
// TYPE STRING
$lastname = 'Geoffroy';
// TYPE INT (numérique)
$age = 33; // pas de quote pour un nombre
// TYPE FLOAT (VALEUR AVEC DECIMALE)
$weight = 70.5; // pas de quote car numérique
// TYPE booléan (true ou false)
$vous_etes_un_garçon = true;
// si le booleen est égal à false il affiche rien ou 0
// si le booleen est égal à true il affiche 1
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP - PARTIE 1 - EXO 4</title>
  </head>
  <body>
    <h1>Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
Les afficher.</h1>
<!-- ICI ON UTILISE LA CONCATENATION + LE RACCOURCI DE < ?php echo EST = A < ?= -->
    <p>Je m'appelle <?php echo $lastname; ?>, j'ai <?php echo $age; ?> ans, je pèse environ <?php echo $weight; ?> kilos, et <?php echo $vous_etes_un_garçon; ?>.</p>
  </body>
</html>
