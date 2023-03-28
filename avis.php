<?php
if (isset($_POST['nom']) && isset($_POST['avis'])) {
  $nom = htmlspecialchars($_POST['nom']);
  $avis = htmlspecialchars($_POST['avis']);
  $fichier = 'avis.txt';
  $nouvel_avis = '<div class="avis"><h3>' . $nom . '</h3><
