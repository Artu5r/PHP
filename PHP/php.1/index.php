<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
print "Tekst - instrukcja print <br>";
echo "Tekst - instrukcja echo"
?>

<?php
print "<b>Grafika:</b>" . "<i>php.gift</i>";
print "<img src=\"obraz.png\">";
?>

<?php
print "<b>Grafika:</b>" . "<i>php.gift</i>";
print "<img src=\"obraz.png\">";
?>

<?php
define("imie", "Jan Kowalski");
define("rok", "1981");
$zawod = "informatyk";
$wiek = 31;
print(imie . "<br>");
print($zawod . "<br>");
print("rocznik - " . rok . "<br>");
print($wiek . " lat <br>");
?>

</body>
</html>

