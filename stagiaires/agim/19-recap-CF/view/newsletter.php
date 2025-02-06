<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Document</title>
</head>

<body>
    <section class="nav-bar">
        <?php
        include("inc/navView.php");
        ?>
    </section>
    <section id="newsletters">
        <div class="text">
            <h3>Restez informé de nos actualités</h3>
            <p>Saisissez votre adresse email pour s'inscrire à notre newsletters</p>
        </div>
        <div class="form-newsletters">
            <input type="text" placeholder="Votre adresse Email">
            <button class="inputboutton">S'inscrire</button>
        </div>
    </section>
    <footer>
        <?php
        include("inc/footerView.php");
        ?>
    </footer>
</body>

</html>