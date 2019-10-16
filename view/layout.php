<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?= $title?></title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<!-- custom css -->
		<link rel="stylesheet" href="public/css/style.min.css">
	</head>
	<body>
		<header>		
			<ul class="nav">
			  <li class="nav-item">
			    <a class="nav-link active" href="index.php">Accueil</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="index.php?a=archives">Archives</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="index.php?a=form">Inscription</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="index.php?a=users">Utilisateurs</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="index.php?a=about">Comment ça marche ?</a>
			  </li>
			</ul>
		</header>

		<?= $content?>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>