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
    <section class="contact-form">
        <div class="form">
            <h4>Contactez-nous</h4>
            <p>Nous sommes toujours là pour vous aider</p>

            <div class="row-form">
                <input type="text" name="" placeholder="Votre Nom">
                <input type="text" name="" placeholder="Votre Email">
            </div>
            <div class="row-col-form">
                <input type="text" name="" placeholder="Sujet">
            </div>
            <div class="row-col-form">
                <textarea cols="40" rows="10" placeholder="Comment pouvons-nous vous aider?"></textarea>
            </div>
            <div class="row-col-form">
                <button>Envoyer </button>
            </div>

        </div>

    </section>
    <footer>
        <?php
        include("inc/footerView.php");
        ?>
    </footer>
</body>

</html>