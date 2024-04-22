<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bibliothèque</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles.css'); ?>" />
</head>
<header>
    <h1>ESICAD - Gestion de Bibliothèque</h1>
    <?php if (isset($loggedIn) && $loggedIn == true) : ?>
        <span>Bonjour, <?= esc($name) ?></span><br>
        <a id="deconnexion" href="/logout">Déconnexion</a>
    <?php endif ?>
    
    <div class="menu">
        <ul>
            <li class="menu-toggle">
                <button id="menuToggle">&#9776;</button>
            </li>
            <li class="menu-item hidden"><a href="/home">Home</a></li>
            <li class="menu-item hidden"><a href="/gestionAbonne">Gestion des abonnes</a>
            </li>
            <li class="menu-item hidden"><a href="/gestionLivre" >Gestion des livres</a></li>
            <li class="menu-item hidden"><a href="https://codeigniter.com/contribute" target="_blank">Contribute</a>
            </li>
        </ul>
    </div>
</header>