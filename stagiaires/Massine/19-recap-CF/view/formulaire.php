<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Apprendre le développement Web | Formulaire</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<section class="nav-bar">

	<?php
	include ("inc/navView.php");
	?>
	</section>
	<section class="contact-form">
		<div class="form">
			<h4>Contactez-nous</h4>
			<p>Nous sommes toujours là pour vous aider</p>

			<div class="row-form">
				<input type="text" name="nom" placeholder="Votre Nom">
				<input type="text" name="email" placeholder="Votre Email">
			</div>
			<div class="row-col-form">
				<input type="text" name="sujet" placeholder="Sujet">
			</div>
			<div class="row-col-form">
				<textarea cols="40" rows="10" placeholder="Comment pouvons-nous vous aider?"></textarea>
			</div>
			<div class="row-col-form">
				<button>Envoyer</button>
			</div>
			
		</div>

	</section>
	<!-- Section footer------------------->
<footer>
	
	<div class="colonne">
		<h3>Informations de contact</h3>
		<div class="contact-infos-detail">
			<h4>Adresse</h4>
			<div>
				<i class="fa-sharp fa-solid fa-location-dot"></i>
				<p>565, rue Victor Hugo, 75000 Paris</p>
			</div>
		</div>
		<div class="contact-infos-detail">
			<h4>Téléphone</h4>
			<div>
				<i class="fa-solid fa-phone"></i>
				<p>09797797977</p>
			</div>
		</div>
		<div class="contact-infos-detail">
			<h4>Adresse Email</h4>
			<div>
				<i class="fa-solid fa-envelope"></i>
				<p>skilldeve dot com</p>
			</div>
		</div>
	</div>

	<div class="colonne">
		<h3>À propos</h3>
		<a href="#">À propos de nous</a>
		<a href="#">Contact</a>
		<a href="#">Politique de confidentialité</a>
		<a href="#">Conditions générales</a>
	</div>

	<div class="colonne">
		<h3>Catégories de formations</h3>
		<a href="#">Développement Web</a>
		<a href="#">Développement Logiciels</a>
		<a href="#">Data Analyse</a>
		<a href="#">Data Science</a>
	</div>


	<div class="copyright">
		<p>© Copyright - Skilldev 2023</p>
	</div>




</footer>
</body>
</html>