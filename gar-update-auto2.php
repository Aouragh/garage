<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>gar-update-auto2</title>
</head>
<body>
<h1>Garage update auto 2</h1>
<p> Dit formulier wordt gebruikt om autogegevens te wijzigen in de tabel auto van de database garage. </p>
</body>
<?php
// klantid uit het formulier

$autokenteken = $_POST["autokentekenvak"];


// klantgegevens uit de tabel halen

require_once "gar-connect.php";
$klanten = $conn->prepare("select klantid, automerk, autotype, autokenteken, autokmstand from auto WHERE autokenteken = :autokenteken");

$klanten->execute(["autokenteken" => $autokenteken]);

// klantgegevens in een nieuw formulier laten zien

echo "<form action='gar-update-auto3.php' method='post'>";

foreach ($klanten as $klant) {
    // klantid mag niet gewijzigd worden
    echo "klantid: " . $klant["klantid"];
    echo " <input type='hidden' name='klantidvak'";
    echo " value=' " . $klant["klantid"] . " '> <br /> ";

    echo " automerk: <input type='text'";
    echo " name = 'automerkvak' ";
    echo " value = '" .$klant["automerk"] . "'";
    echo " > <br />";

    echo " autotype: <input type='text'";
    echo " name = 'autotypevak' ";
    echo " value = '" .$klant["autotype"] . "'";
    echo " > <br />";

    echo " autokmstand: <input type='text'";
    echo " name = 'autokmstandvak' ";
    echo " value = '" .$klant["autokmstand"] . "'";
    echo " > <br />";

    echo " autokenteken: <input type='text'";
    echo " name = 'autokentekenvak' ";
    echo " value = '" .$klant["autokenteken"] . "'";
    echo " > <br />";


}

echo "<input type='submit'>";
echo "</form>";
// Er moet eigenlijk nog gecontroleerd worden op een bestaand klantid.
?>
</html>

