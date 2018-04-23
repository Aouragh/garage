<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Gar-search-auto2.php</title>
</head>
<body>
<h1> Garage zoek op kenteken 2 </h1>
<p> Op kenteken gegevens zoeken uit de tabel auto van de database garage. </p>
<?php
// Klantid uit het formulier halen
$autokenteken = $_POST["autokentekenvak"];
//Klantgegevens uit de tabel halen

require_once "gar-connect.php";
$sql = $conn->prepare("select klantid, automerk, autotype, autokenteken, autokmstand from auto where autokenteken = :autokenteken");
$sql->execute(["autokenteken" => $autokenteken]);

// Klantgegevens laten zien

echo "<table>";
foreach($sql as $rij)
{
    echo "<tr>";
    echo "<td>" . $rij["klantid"] . "</td>";
    echo "<td>" . $rij["automerk"] . "</td>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autokenteken"] . "</td>";
    echo "<td>" . $rij["autokmstand"] . "</td>";
    echo "<tr>";
}

echo "</table> <br />";
echo "<a href='gar-menu.php'> Terug naar het menu </a>";
?>
</body>
</html>


