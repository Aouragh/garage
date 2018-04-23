<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>gar-update-auto1.php</title>
</head>
<body>
<?php

require_once "gar-connect.php";
$sql = $conn->prepare("select * from auto");
$sql->execute();
$autos = $sql->fetchAll(PDO::FETCH_ASSOC);

?>
<h1> Garage update auto 1</h1>
<p> Dit formulier wordt gebruikt om autogegevens te wijzigen. </p>
<form action="gar-update-auto2.php" method="post">
    Welk klantid wilt u wijzigen ?
    <select name="autokentekenvak" id="autokenteken">
        <?php
        foreach($autos as $auto)
        {
            ?>
            <option value="<?php echo $auto['autokenteken']; ?>"><?php echo $auto['autokenteken']; ?></option>
        <?php
        }
        ?>
    </select> <br />
    <input type="submit">
</form>
</body>
</html>