<!DOCTYPE html>
<html>
	<head>
		<title>Katolikus oldal</title>
		<link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
		<meta charset="utf-8">
		
		<script src="script.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body>
	
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand text-white">Katolikus oldal</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>


			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li>
						<a class="nav-link" href="index.php?oldal=home">Kezdőlap</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?oldal=gallery">Galléria</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?oldal=table">Táblázat</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Továbbiak</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="index.php?oldal=ima">Ima Szent Józsefhez</a>
							<a class="dropdown-item" href="index.php?oldal=jezus">Jézus</a>
							<a class="dropdown-item" href="index.php?oldal=szentek">Szentek</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		<div class="tartalom">
			<?php include("$tartalom"); ?>	
		</div>
</body>
