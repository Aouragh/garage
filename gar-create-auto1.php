<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gar-create-auto1.php</title>
</head>
<body>
<h1>Garage Create Auto 1</h1>
<p> Dit formulier wordt gebruikt om autogegevens in te voeren </p>
<?php

require_once "gar-connect.php";
$sql = $conn->prepare("select * from klant");
$sql->execute();
$klanten = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<form action="gar-create-auto2.php" method="post">
    <label>
        klant: <select name="klantid" id="klantid">
            <?php
        foreach($klanten as $klant){
            ?>
            <option value="<?php echo $klant['klantid'];?>"><?php echo $klant['klantnaam'];?></option>
            <?php
        }
?>
        </select> <br>
        automerk: <input type="text" name="automerkvak"> <br />
        autotype: <input type="text" name="autotypevak"> <br />
        autokmstand: <input type="text" name="autokmstandvak"> <br />
        autokenteken: <input type="text" name="autokentekenvak"> <br />
        <input type="submit">

    </label>
</form>
</body>
</html>