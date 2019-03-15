<?php
// declaration de la variable
$km = 1; //on ne met pas de '' car c'est un nombre
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP PARTIE 1 - EXO 3</title>
</head>
  <body>
    <h1>Créer une variable km. L'initialiser à 1. Afficher son contenu.
      Changer sa valeur par 3. Afficher son contenu.
      Changer sa valeur par 125. Afficher son contenu.</h1>

      <!-- affichage de la 1ère variable -->
      <p>La première valeur représente <?php echo $km; ?></p>

      <!-- deuxième declaration de la variable -->
      <?php $km = 3; ?>
      <p>La deuxième valeur représente <?php echo $km; ?></p>

      <!-- troisième declaration de la variable -->
      <?php $km = 125; ?>
      <p>La troisième valeur représente <?php echo $km; ?></p>
  </body>
</html>
