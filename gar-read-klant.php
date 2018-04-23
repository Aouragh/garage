<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>gar-read-klant.php</title>
</head>
<body>
<h1>garage read klant</h1>
<p>
    Dit zijn alle gegevens uit de tabel klanten van database garage.
</p>
<?php
//Tabel uitlezen en netjes afdrukken

require_once "gar-connect.php";
$sql = $conn->prepare("select klantid,klantnaam,klantadres,klantpostcode,klantplaats from klant");
$sql->execute();

echo "<table>";
foreach($sql as $rij)
{

    echo "<tr>";
    echo "<td>" . $rij["klantid"] . "<br />" . "</td>";
    echo "<td>" . $rij["klantnaam"] . "</td>";
    echo "<td>" . $rij["klantadres"] . "</td>";
    echo "<td>" . $rij["klantpostcode"] . "</td>";
    echo "<td>" . $rij["klantplaats"] . "</td>";
    echo "</tr>";

}
echo "<br />";
echo "</table>";
echo "<br />";
echo "<a href='gar-menu.php'> Terug naar het menu. </a>";

?>
</body>
</html>


