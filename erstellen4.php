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
<form action="start.php" method="post">
<?php

// Liste beenden

$titel = htmlentities($_POST["titel"]);
$fuss = "); ?>";

file_put_contents("$titel.php", $fuss, FILE_APPEND);

echo "<h2>Modul \"$titel\" gespeichert.</h2>";

?>
<p><input type="submit" value="Zurück zur Startmenü" style="height: 50px"></p>
</form>
</div>
</body>
</html>