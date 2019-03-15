<?php
// declaration des variables
$lastname = 'Geoffroy';
$firstname = 'Vilain';
$age = 33; // nombre entier car pas de quote
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP - PARTIE 1 - EXO 2</title>
</head>
<body>
  <h1>Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.
      Attention age est de type entier. Afficher leur contenu.</h1>
  <!--  version pas la plus optimisée -->
<!-- < ?php
echo 'Je m\'appelle ' . $lastname . ' ' . $firstname . ' et j\'ai ' . $age . ' ans.';
?> -->
<!--  ou version la plus optimisée -->
<p>Je m'appelle <?= $lastname ?> <?= $firstname?> et j'ai <?= $age ?> ans.</p>
<!-- ou version moins optimisée -->
<p><?php echo 'Je m\'appelle ' . $lastname . ' ' . $firstname . ' et j\'ai ' . $age . ' ans.'; ?></p>
</body>
</html>
