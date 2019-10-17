<? $title = "Page non trouvée";

ob_start();?>
<h1>Erreur 404</h1>

<h3>La page que vous avez demandé n'existe pas</h3>
<a href="index.php">Revenir vers l'accueil</a>
<?php $content = ob_get_clean();

require'layout.php';?>