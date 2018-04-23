<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Gar-delete-klant3.php</title>
</head>
<body>
<h1>Garage delete klant 3</h1>
<p> Op klantid gegevens zoeken uit de tabel klanten van de database garage zodat ze verwijderd kunnen worden. </p>
<?php
//Gegevens uit het formulier halen
$klantid = $_POST["klantidvak"];
$verwijderen = $_POST["verwijdervak"];

if($verwijderen)
{
    require_once "gar-connect.php";
    $sql = $conn->prepare("delete from klant where klantid = :klantid");
    $sql->execute(["klantid" => $klantid]);
    echo "De gegevens zijn verwijderd. <br />";
}

else {
    echo "De gegevens zijn niet verwijderd. <br />";
}
echo "<a href='gar-menu.php'> Terug naar het menu. </a>";
?>
</body>
</html>