<?php 

$title='Éditer ' . $user->getName();

ob_start();?>
<h1>Mise à jour des informations de <?= $user->getName();?></h1>
<form action="index.php?a=updateUser&id=<?= $user->getId();?>" method="POST">
	<div class="form-group row">
		<label for="name" class="col-sm-2 form-control-label">Nom</label>
		<div class="col-sm-10">
			<input type="name" class="form-control" id="name" placeholder="Nom" value="<?= $user->getName();?>" name="name" required>
		</div>
	</div>
	<div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 form-control-label">Email</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="<?= $user->getEmail();?>" name="email" required>
		</div>
	</div>
	<div class="form-group row">
		<label for="inputPassword3" class="col-sm-2 form-control-label">Mot de passe</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputPassword3" placeholder="Mot de passe" value="<?= $user->getPassword();?>" name="password" required>
		</div>
	</div>
	<!--<div class="form-group row">
		<label class="col-sm-2">Checkbox</label>
		<div class="col-sm-10">
			<div class="checkbox">
				<label>
					<input type="checkbox"> Check me out
				</label>
			</div>
		</div>
	</div>-->
	<div class="form-group row">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-secondary">Mettre à jour</button>
		</div>
	</div>
</form>
<?php $content= ob_get_clean();

require('view/layout.php');