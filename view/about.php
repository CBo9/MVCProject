<?php
$title = "Comment ça marche?";

ob_start();?>

<h1>Comment ça marche?</h1>

<p><b>Ce site  a été crée dans le but de se trouver des amis.</b></p>
<p>Pour cela, rien de plus simple! Rendez-vous sur <a href="index.php?a=form"> la page d'inscription</a> pour être visible sur la page 'Utilisateurs' ou rendez-vous directement sur la page <a href="index.php?a=users">Utilisateurs</a> pour contacter des membres déjà inscrits.</p>

<?php
$content  = ob_get_clean();

require('view/layout.php');
?>