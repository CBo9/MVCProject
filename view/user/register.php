<?php $title='Formulaire';

ob_start();?>
<h1>Formulaire d'inscription</h1>
<div class="container-fluid">
	<form action="index.php?a=newUser" method="POST">
		<div class="form-group row">
			<label for="name" class="col-sm-2 form-control-label">Nom</label>
			<div class="col-sm-10">
				<input type="name" class="form-control" id="name" placeholder="Nom" name="name" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 form-control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="inputPassword3" class="col-sm-2 form-control-label">Mot de passe</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="inputPassword3" placeholder="Mot de passe" name="password" required>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-secondary">S'inscrire</button>
			</div>
		</div>
	</form>
</div>
<?php $content= ob_get_clean();

require('view/layout.php');