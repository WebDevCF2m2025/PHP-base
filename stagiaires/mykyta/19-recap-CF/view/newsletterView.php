<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Apprendre le développement Web | Newsletter</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/a62a90acc1.js" crossorigin="anonymous"></script>
</head>
<body>
	<section class="nav-bar">
		<?php include "inc/navView.php"; ?>
	</section>
	<section id="newsletters">
		<div class="text">
			<h3>Restez informé de nos actualités</h3>és</h3>
		    <p>Saisissez votre adresse email pour s'inscrire à notre newsletter</p>notre newsletter</p>
		</div>
		<p class="showbox" onclick="document.querySelector('.form-newsletters').classList.add('showme');">Intéressé ? Alors cliquez ici</p>'.form-newsletters').classList.add('showme');">Intéressé ? Alors cliquez ici</p>
		<div class="form-newsletters">
			<input type="text" placeholder="Votre adresse Email">t type="text" placeholder="Votre adresse Email">
			<button class="inputbutton">S'inscrire</button>on class="inputbutton">S'inscrire</button>
		</div>		</div>
	</section>
	<!-- Section footer------------------->
<footer>
	<?php include "inc/footerView.php"; ?>
</footer>
</body>
</html>