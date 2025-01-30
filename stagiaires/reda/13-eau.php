<?php
$userTemp = $_POST['temp'];
$etatEau;
if ($userTemp > 200) {
  $etatEau = 'OOH if fait chaud';
} else if ($userTemp >= 100) {
  $etatEau = 'Gazeux';
} else if ($userTemp <= 99 && $userTemp >= 1) {
  $etatEau = 'liquid';
} else {
  $etatEau = 'solid';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="./13-eau.php" method="post"><br>
    Veuillez inserez la température de l'eau<input type="text" name='temp' id="temps">
  </form>
  L'etat de leau => <?php echo $etatEau ?><br>
</body>

</html>