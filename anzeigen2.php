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

$name = $_POST["name"];

include "$name.php";

$count = count($liste);

for ($i=0; $i<$count; $i++)
{
    for ($j=0; $j<=1; $j++)
    {
        echo $liste[$i][$j] . " / ";
    }
    echo "<br>";
}

?>
</form>
<hr>
<form action="anzeigen.php" method="post">
<p><input type="submit" value="Zurück zur Anzeigemenü" style="height: 50px"></p>
</div>
</body>
</html>