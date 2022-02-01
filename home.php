<?php
if (session_status() == PHP_SESSION_NONE) session_start();
require "./Character.php";
require "./Hero.php";
require "./Orc.php";
$hero = new Hero(2000, 0, 'Excalibur', 250, 'Bouclier La Manu', 600);
$hero->getDamage(800);
$hero->growRage(3);
$orc = new Orc(500, 0);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/style.css" rel="stylesheet" />
  <title>POO Partie 1</title>
</head>

<body>
  <h1>POO Partie 1</h1>
  <!-- <form>
    <input type="submit" name="newHeros" value="Nouveau Héros" onclick="Hero.php">
    <input type="submit" name="newAttaque" value="Attaque" onclick="getDamage()">
  </form> -->

  <p>Création d'un nouveau Heros</p>
  <ul>
    <li>Vie : <?= $hero->getHealth() ?></li>
    <li>Rage : <?= $hero->getRage() ?></li>
    <li>Arme : <?= $hero->getWeapon() ?></li>
    <li>Dégats : <?= $hero->getweaponDamagerage() ?></li>
    <li>Bouclier : <?= $hero->getShield() ?></li>
    <li>Valeur du bouclier : <?= $hero->getshieldValue() ?></li>
    <li>Valeur de la nouvelle vie : <?= $hero->getHealth() ?></li>
  </ul>

  <p>Création d'un nouveau Orc</p>
  <ul>
    <li>Vie : <?= $orc->getHealth() ?></li>
    <li>Rage : <?= $orc->getRage(); ?></li>
  </ul>

  <?php
  $round=1;
  while ($hero->getHealth() >= 0) {
  $orc->Attack();
  $hero->getDamage($orc->getDamage());
  $hero->growRage(1);
  ?>

<h2><?= $round++ ?> - Une attaque a été lancé. </h2>

<?php 
if ($hero->getHealth() <= 0) { ?>
  <h2> le Héros est vaincu.</h2>
  <?php } else { ?>
    <p>Le Héro a maintenant <?= $hero->getHealth() ?> points de vie et <?= $hero->getRage() ?> points de rage.</p>
<?php } 
}
?>
  <img src="logo_la_manu_formation_400.png" alt="logo La Manu">

  <!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
  <footer>
    <p>©Copyright 2050 par personne. Tous droits reversés.</p>
  </footer>

</body>

</html>