<?php $title='Formulaire';

ob_start();?>
<form action="index.php?a=newUser" method="POST">
	<div class="form-group row">
		<label for="name" class="col-sm-2 form-control-label">Name</label>
		<div class="col-sm-10">
			<input type="name" class="form-control" id="name" placeholder="Name" name="name" required>
		</div>
	</div>
	<div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 form-control-label">Email</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" required>
		</div>
	</div>
	<div class="form-group row">
		<label for="inputPassword3" class="col-sm-2 form-control-label">Password</label>
		<div class="col-sm-10">
			<input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" required>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Checkbox</label>
		<div class="col-sm-10">
			<div class="checkbox">
				<label>
					<input type="checkbox"> Check me out
				</label>
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-secondary">Sign in</button>
		</div>
	</div>
</form>
<?php $content= ob_get_clean();

require('layout.php');