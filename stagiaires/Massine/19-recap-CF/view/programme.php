<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Apprendre le développement Web | Programme</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/a62a90acc1.js" crossorigin="anonymous"></script>
</head>
<body>
	<section class="nav-bar">
	<?php
	include ("inc/navView.php");
	?>
	</section>
	<section class="formations">
		<h1>Notre programme de formation</h1>

		<div class="formations-col">
			<img src="images/html-css.jpg">
			<div class="duree">60 h</div>
			<h3>HTML & CSS</h3>
			<p>Le HTML est un langage créé pour structurer des pages et pour donner du sens au contenu. Le CSS va servir à mettre en forme les différents contenus définis par le HTML en leur appliquant des styles.</p>

			<div class="star-formation">
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<span>(3454)</span>
			</div>

			<a href="formations.html" class="btn-formation">Découvrir la formation</a>
		</div>

		<div class="formations-col">
			<img src="images/php.jpg">
			<div class="duree">240 h</div>
			<h3>PHP</h3>
			<p>PHP est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur web, pouvant également fonctionner avec une base de données.</p>

			<div class="star-formation">
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<span>(6655)</span>
			</div>
			
			<a href="formations.html" class="btn-formation">Découvrir la formation</a>
		</div>

		<div class="formations-col">
			<img src="images/javascript.jpg">
			<div class="duree">160 h</div>
			<h3>JavaScript</h3>
			<p>JavaScript est un langage de programmation de scripts principalement employé dans les pages web interactives et à ce titre est une partie essentielle des applications web modernes.</p>

			<div class="star-formation">
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<span>(2087)</span>
			</div>

			<a href="formations.html" class="btn-formation">Découvrir la formation</a>
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