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
<form action="anzeigen2.php" method="post">
<p>Welche Liste möchten Sie ansehen?</p>
<?php

include "modul.php";

$count = count($modul);

for ($i=0; $i<$count; $i++)
{
    echo "<p><input type='submit' name='name' value='$modul[$i]' style='width: 100px; height: 50px'></p>";
}

?>
</form>
<hr>
<form action="start.php" method="post">
<p><input type="submit" value="Zurück zur Startmenü" style="height: 50px"></p>
</div>
</body>
</html>