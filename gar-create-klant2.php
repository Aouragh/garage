<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gar-Create-Klant2.php</title>
</head>
<body>
<h1>Garage create klant 2</h1>

<?php

$klantid = NULL;
$klantnaam = $_POST["klantnaamvak"];
$klantadres = $_POST["klantadresvak"];
$klantpostcode = $_POST["klantpostcodevak"];
$klantplaats = $_POST["klantplaatsvak"];

require_once "gar-connect.php";


$sql = $conn->prepare("insert into klant values (
        :klantid, :klantnaam, :klantadres, :klantpostcode, :klantplaats)");
$sql->execute([
    "klantid" => $klantid,
    "klantnaam" => $klantnaam,
    "klantadres" => $klantadres,
    "klantpostcode" => $klantpostcode,
    "klantplaats" => $klantplaats

]);

echo "De klant is toegevoegd. <br />";
echo "<a href='gar-menu.php'> Terug naar het menu.</a>";

?>
</body>
</html>

