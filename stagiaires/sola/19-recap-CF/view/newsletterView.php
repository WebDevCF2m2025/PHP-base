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
	<section id="newsletters">
		<div class="text">
			<h3>Restez informé de nos actualités</h3>
		    <p>Saisissez votre adresse email pour s'inscrire à notre newsletter</p>
		</div>
		<p class="showbox" onclick="document.querySelector('.form-newsletters').classList.add('showme');">Intéressé ? Alors cliquez ici</p>
		<div class="form-newsletters">
			<input type="text" placeholder="Votre adresse Email">
			<button class="inputbutton">S'inscrire</button>
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