<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Gar-update-klant3.php</title>
</head>
<body>
<h1> Klantgegevens wijzigen in de tabel klant van de database garage. </h1>
<p> Klantgegevens wijzigen in de tabel klant van de database garage. </p>

<?php
// Klantgegevens uit het formulier halen
$klantid = $_POST["klantidvak"];
$automerk = $_POST["automerkvak"];
$autotype = $_POST["autotypevak"];
$autokmstand = $_POST["autokmstandvak"];
$autokenteken = $_POST["autokentekenvak"];

var_dump($klantid);
var_dump($automerk);
var_dump($autotype);
var_dump($autokmstand);
var_dump($autokenteken);

require_once "gar-connect.php";

$sql = $conn->prepare("update auto set klantid = :klantid,
autotype = :autotype,
automerk = :automerk,
autokmstand = :autokmstand
WHERE klantid = :klantid");

$sql->execute(
    [
        "klantid" => $klantid,
        "automerk" => $automerk,
        "autotype" => $autotype,
        "autokmstand" => $autokmstand,
        "autokenteken" => $autokenteken

    ]);

echo "De auto is gewijzigd. <br />";
echo "<a href='gar-menu.php'> Terug naar het menu </a>"

?>
</body>

</html>
