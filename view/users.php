<?php 
$title = "Users";

ob_start();?>

<h1>Voici les membres de notre site</h1>

<?php 
while($user = $users->fetch()){
echo "<p>". $user['name'] . "</p>";
}
$content = ob_get_clean();

require ('view/layout.php');?>
