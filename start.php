<DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Voki 7</title>
</head>
<body>
<div>
<h1>Voki 7</h1>
</div>
<div>
<form action="voki.php" method="post">
<p>Anzahl Runden: <input name="rundentotal" value="20" size="1"></p>
<?php

include "modul.php";

$count = count($modul);

for ($i=0; $i<$count; $i++)
{
    echo "<p><input type='submit' name='modul' value='$modul[$i]' style='width: 100px; height: 50px'></p>";
}

?>
</form>
<hr>
<form action="anzeigen.php" method="post">
<p><input type="submit" value="Modul anzeigen" style="height: 50px"></p>
</form>
<form action="erstellen.php" method="post">
<p><input type="submit" value="Modul erstellen" style="height: 50px"></p>
</form>
</div>
</body>
</html>