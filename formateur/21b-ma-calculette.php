<?php
# formateur\21b-ma-calculette.php
// function simple utilisable

function calculSimple($nb1, $nb2, $operator = "+")
{
    if($operator=="-"){
        return $nb1 - $nb2;
    }elseif($operator=="*"){
        return $nb1 * $nb2;
    }elseif($operator=="/"){
        if($nb2==0) return "impossible de diviser par 0";
        return $nb1 / $nb2;
    }else{
        return $nb1 + $nb2;
    }
}

$resultat = calculSimple(1, 2, "+");
$resultat .= "<br>";
$resultat .= calculSimple(7, 5, "-");
$resultat .= "<br>";
// valeur par défaut est + car dans le else
$resultat .= calculSimple(7, 5, "nimportequoi");
$resultat .= "<br>";
$resultat .= calculSimple(7.26, 55, "*");
$resultat .= "<br>";
$resultat .= calculSimple(7.26, 0, "/");
$resultat .= "<br>";
$resultat .= calculSimple(7.26, 7, "/");
$resultat .= "<br>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ma calculette</title>
</head>
<body>
<h1>Calculatrice Simplifiée</h1>
<form method="post">
    <label for="nombre1">Nombre 1 :</label>
    <input type="text" name="nombre1" id="nombre1" required>
    <br><br>
    <label for="operation">Opération :</label>
    <select name="operation" id="operation" required>
        <option value="+">Addition (+)</option>
        <option value="-">Soustraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
    </select>
    <br><br>
    <label for="nombre2">Nombre 2 :</label>
    <input type="text" name="nombre2" id="nombre2" required>
    <br><br>
    <button type="submit">Calculer</button>
</form>
<h2>Résultat</h2>
<p><?php if (isset($resultat)) echo $resultat ?></p>
</body>
</html>