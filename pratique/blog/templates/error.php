<?php $title = "Le blog d' Aly"; ?>

<?php ob_start(); ?>
<h1>Le super blog d'Aly !</h1>
<p>Une erreur est survenue : <?= $errorMessage ?></p>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>