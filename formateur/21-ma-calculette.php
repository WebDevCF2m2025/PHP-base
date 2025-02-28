<?php
// fonction typée permettant une calculatrice basique
/**
 * Function to perform basic arithmetic operations.
 *
 * @param float $nb1 The first number.
 * @param float $nb2 The second number.
 * @param string $operator The arithmetic operator (+, -, *, /). Default is "+".
 * @return float|string The result of the arithmetic operation or an error message for division by zero or not valid operator
 */
function calculSimple(float $nb1, float $nb2, string $operator = "+"): float|string
{
    // version avec switch, qui est moins strict en PHP qu'en javascript !
    switch ($operator) {
        case '+': return $nb1 + $nb2;
        case '-': return $nb1 - $nb2;
        case '*': return $nb1 * $nb2;
        case '/': return $nb2 == 0 ? "Division par 0 impossible" : $nb1 / $nb2;
        default: return "Opérateur non valide !";
    }
    // version avec match() depuis PHP 8.0, plus strict et plus court
//    return match ($operator) {
//        '+' => $nb1 + $nb2,
//        '-' => $nb1 - $nb2,
//        '*' => $nb1 * $nb2,
//        '/' => $nb2 == 0 ? "Division par 0 impossible" : $nb1 / $nb2,
//        default => "Opérateur non valide !",
//    };
}

// si le formulaire a été soumis et que les 3 variables existent (une seule vérification suffirait).
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre1'], $_POST['nombre2'], $_POST['operation'])) {
    $nombre1 = (float) $_POST['nombre1'];
    $nombre2 = (float) $_POST['nombre2'];
    $operation = $_POST['operation'];
    $resultat = "$nombre1 $operation $nombre2 = ";
    $resultat .= calculSimple($nombre1, $nombre2, $operation);
}
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
<p><?php if (isset($resultat)) echo $resultat; ?></p>
</body>
</html>