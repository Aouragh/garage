<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gar-Create-Auto2.php</title>
</head>
<body>
<h1>Garage create auto 2</h1>

<?php

$klantid = $_POST['klantid'];
$automerk = $_POST["automerkvak"];
$autotype = $_POST["autotypevak"];
$autokmstand = $_POST["autokmstandvak"];
$autokenteken = $_POST["autokentekenvak"];

require_once "gar-connect.php";

$sql = $conn->prepare('INSERT INTO auto (automerk, autotype, autokmstand, autokenteken, klantid) VALUES (:automerk, :autotype, :autokmstand, :autokenteken, :klantid)');
$sql->bindParam(":automerk", $automerk);
$sql->bindParam(":autotype", $autotype);
$sql->bindParam(":autokmstand", $autokmstand);
$sql->bindParam(":autokenteken", $autokenteken);
$sql->bindParam(":klantid", $klantid);
$sql->execute();

//
//$sql = $conn->prepare("insert into auto values (
//        :automerk, :autotype, :autokmstand, :autokenteken, :klantid)");
//
//
//$sql->execute([
//    'automerk' => ,
//    'autotype' => $autotype,
//    'autokmstand' => $autokmstand,
//    'autokenteken' => $autokenteken,
//    'klantid' => $klantid
//]);

echo "De auto is toegevoegd. <br />";
echo "<a href='gar-menu.php'> Terug naar het menu.</a>";

?>
</body>
</html>

