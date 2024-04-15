<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bibliothèque</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles.css');?>"/>
</head>
<header>
    <h1>ESICAD - Gestion de Bibliothèque</h1>
    <?php if (isset($loggedIn) && $loggedIn == true) : ?>
        <span>Bonjour, <?=esc($name)?></span>
        <?php endif?>
</header>