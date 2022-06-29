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

<?php

// Modul-Titel in modul.php einfügen

echo "<form action='erstellen3.php' method='post'>";

$titel = htmlentities($_POST["titel"]);
echo "<input type='hidden' name='titel' value='$titel'>";

include "modul.php";

$kopf = "<?php \$modul = array(";
$fuss = "); ?>";
$neuliste = "<?php \$liste = array(";

$count = count($modul);

file_put_contents("modul.php", $kopf);

for ($i=0; $i<$count; $i++)
{
    $einfügen = "\"$modul[$i]\"";
    file_put_contents("modul.php", "\"$modul[$i]\"", FILE_APPEND);
    file_put_contents("modul.php", ", ", FILE_APPEND);
}

file_put_contents("modul.php", "\"$titel\"", FILE_APPEND);
file_put_contents("modul.php", $fuss, FILE_APPEND);

file_put_contents("$titel.php", $neuliste);

echo "<h2>Modul $titel wurde erstellt.</h2>";

echo "<p><input type='submit' value='Weiter' style='width: 100px; height: 50px'></p>";
echo "</form>";

?>

</div>
</body>
</html>