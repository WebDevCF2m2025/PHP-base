<!DOCTYPE html>
<html>
<head>
	<?php
    include 'inc/metaIncView.php'
    ?>
</head>
<body>
	<section class="nav-bar">

		<?php
        include 'inc/navView.php'
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
    <?php
    include 'inc/footerView.php'
    ?>	
</footer>
</body>
</html>