<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>gar-read-auto1.php</title>
</head>
<body>
<h1>garage read klant</h1>
<p>
    Dit zijn alle gegevens uit de tabel auto van database garage.
</p>
<?php
//Tabel uitlezen en netjes afdrukken

require_once "gar-connect.php";
$sql = $conn->prepare("select klantid,automerk,autotype,autokmstand,autokenteken from auto");
$sql->execute();

echo "<table>";
foreach($sql as $rij)
{

    echo "<tr>";
    echo "<td>" . $rij["klantid"] . "<br />" . "</td>";
    echo "<td>" . $rij["automerk"] . "</td>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autokmstand"] . "</td>";
    echo "<td>" . $rij["autokenteken"] . "</td>";
    echo "</tr>";

}
echo "<br />";
echo "</table>";
echo "<br />";
echo "<a href='gar-menu.php'> Terug naar het menu. </a>";

?>
</body>
</html>


