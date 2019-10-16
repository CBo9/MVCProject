<?php 
$title = "Users";

ob_start();?>

<h1>Voici les membres de notre site</h1>

<?php 
while($user = $users->fetch()){?>
<p>
	<ul>
		<li>Nom: <a href="index.php?a=users&id=<?= $user['id'];?> "><?= $user['name'];?></a></li> 
		<li>Email: <?= $user['email'];?></li>
		<li>Mot de passe: <?php printf("%12.3s***", $user['password']);?></li>
	</ul>
</p>
<?php }
$content = ob_get_clean();

require ('view/layout.php');?>
