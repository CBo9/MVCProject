<?php 
$title = 'Profil de ' . $user->getName() ; 

ob_start(); ?>

<h1>Profil de <?= $user->getName() ;?> </h1>

<?php $content = ob_get_clean();

require('view/layout.php');