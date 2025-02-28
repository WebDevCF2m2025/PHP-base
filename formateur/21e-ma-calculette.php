<?php
# formateur\21c-ma-calculette.php
// utilisation de notre fonction en switch, fonctionne grâce au transtypage en cas de numérique (changement de type automatique par PHP), sauf si non valide (string seul)

function calculSimple($nb1, $nb2, $operator = "+")
{
    switch($operator){
        // le return arrête la fonction au ; qui le suit
        case "-": return $nb1-$nb2;
        case "*": return $nb1*$nb2;
        case "/": return ($nb2==0)? "Division par 0 impossible" : $nb1/$nb2;
        case "+": return $nb1+$nb2;
        default : return "Opérateur non accepté";
    }
}

// isset vérifie l'existance de toutes nos variables nécessaires suivies par une ,
if(isset($_POST['nombre1'],
         $_POST['nombre2'],
         $_POST['operation'])
         ){
        $resultat = calculSimple(
            $_POST['nombre1'],
            $_POST['nombre2'],
            $_POST['operation']
        );
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
    <input type="text" name="nombre1" id="n1" required>
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
    <input type="text" name="nombre2" id="n2" required>
    <br><br>
    <button type="submit">Calculer</button>
</form>
<h2>Résultat</h2>
<p><?php if (isset($resultat)) echo $resultat ?></p>
<p><?php var_dump($_POST); ?></p>
</body>
</html>