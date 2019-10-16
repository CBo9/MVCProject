<?php $title='Archives';

ob_start();?>
<h1>Archives</h1>

<img src="https://media.giphy.com/media/hEc4k5pN17GZq/giphy.gif">
<?php $content= ob_get_clean();

require('layout.php');