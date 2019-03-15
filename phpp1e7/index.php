<?php
  $lastname = 'Geoffroy';
  $firstname = 'Vilain';
  $age = 33;
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>PHP - PARTIE 1 - EXO 7</title>
   </head>
   <body>
     <h1>Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
       Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans".</h1>
<!-- ici, on appelle les 3 variables en faisant des concaténations : $x . $y . 'string' -->
      <p>Bonjour <?= $lastname . ' ' . $firstname; ?>, tu as <?= $age ?> ans.</p>
   </body>
 </html>
