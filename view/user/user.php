<?php 
$title = 'Profil de ' . $user->getName() ; 

ob_start(); ?>

<h1>Profil de <?= $user->getName() ;?> </h1>

<a href="index.php?a=updateUserForm&id=<?= $user->getId();?>">Mettre à jour ses informations</a>

<?php $content = ob_get_clean();

require('view/layout.php');