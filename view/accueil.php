<?php $title='Accueil';

ob_start();?>
<h1>Bienvenue sur l'accueil</h1>
<?php $content= ob_get_clean();

require('layout.php');