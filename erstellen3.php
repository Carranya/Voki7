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

// Wörter einfügen

echo "<form action='erstellen3.php' method='post'>";

$titel = htmlentities($_POST["titel"]);
    echo "<input type='hidden' name='titel' value='$titel'>";
    echo "<h2>Modul: $titel</h2>";

if(isset($_POST["wort1"]))
{

    $wort1 = htmlentities($_POST["wort1"]);
    $wort2 = htmlentities($_POST["wort2"]);
    
    echo "\"$wort1\" und \"$wort2\" eingefügt<br>";

    file_put_contents("$titel.php", "array(\"$wort1\", \"$wort2\"), ", FILE_APPEND);    
}

    echo "<p>Wort 1: <input name='wort1'> Wort 2: <input name='wort2'></p>";
    echo "<p><input type='submit' value='nächste Wort' style='width: 100px; height: 50px'></p>";
echo "</form>";

?>
<form action="erstellen4.php" method="post">
<?php
    $titel = htmlentities($_POST["titel"]);
    echo "<input type='hidden' name='titel' value='$titel'>";
?>
<p><input type="submit" value="Fertig" style="width: 100px; height: 50px"></p>
</form>
</div>
</body>
</html>