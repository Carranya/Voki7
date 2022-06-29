<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Vokabulair Training</title>
    <style> table,td {border: 1px solid black}</style>
</head>
<body>
<div>
<h1>Voki 7</h1>
</div>
<div>

<?php


// Antwort richtig?

if(isset($_POST["loesung"]))
{
    $runde = $_POST["runde"];
    $rundetotal = $_POST["rundetotal"];
    $fragewort = $_POST["fragewort"];
    $richtig = $_POST["richtig"];
    $loesung = $_POST["loesung"];
    $punkte = $_POST['punkte'];

    $modul = $_POST["modul"];
    echo "<h2>Modul: \"$modul\"</h2>";

    $runde++;
    if ($runde > $rundetotal)
    {
        echo "<h2>Sitzung beendet</h2>";
    }
    else
    {
        echo "<h2>Runde " . $runde . " von " . $rundetotal . "</h2>";
    }

    if ($richtig == $loesung)
    {
        echo "<h3>Richtig!</h3>";
        echo "<hr>";
        $punkte++;
    }
    else
    {
        echo "<h3>Falsch!</h3>";
        echo $fragewort . " = " . $richtig . "<br>";
        echo "<hr>";
    }
    if ($runde > $rundetotal)
    {
        echo "<h2>Du hast $punkte von $rundetotal richtig gelöst.</h2>";
        exit;
    }
}
else
{
    $modul = $_POST["modul"];
    $runde = 1;
    $rundetotal = 20;
    $punkte = 0;
    echo "<h2>Modul: \"$modul\"</h2>";
    echo "<h2>Runde " . $runde . " von " . $rundetotal . "</h2>";
    echo "<hr>";
}



include "$modul.php";

// Fragewort generieren

echo "<form action='voki.php' method='post'>";

echo "<input type='hidden' name='runde' value='$runde'>";
echo "<input type='hidden' name='rundetotal' value='$rundetotal'>";
echo "<input type='hidden' name='punkte' value='$punkte'>";
echo "<input type='hidden' name='modul' value='$modul'>";

$count = count($liste);
$wort = random_int(0,($count-1));
$sprache = random_int(0,1);

$fragewort = $liste[$wort][$sprache];
echo "<input type='hidden' name='fragewort' value='$fragewort'>";

echo "<table style='width:200px ;height: 50px'>";
echo "<tr><td style='text-align: center'>$fragewort</td></tr>";
echo "</table>";

// Antworten generieren


if ($sprache == 0)
{
    $antsprache = 1;
}
else
{
    $antsprache = 0;
}

for ($i=1; $i<=4; $i++)
{
    $antw = random_int(0,($count-1));
    $antwort[$i] = $liste[$antw][$antsprache];
}

$richtig = $liste[$wort][$antsprache];
echo "<input type='hidden' name='richtig' value='$richtig'>";

// Antwort Auswahl generieren

$richtigwahl = random_int(1,4);

$antwort[$richtigwahl] = $richtig;


echo "<p><input type='submit' name='loesung' value='$antwort[1]' style='width: 100px; height: 30px'>
<input type='submit' name='loesung' value='$antwort[2]' style='width: 100px; height: 30px'></p>";
echo "<p><input type='submit' name='loesung' value='$antwort[3]' style='width: 100px; height: 30px'>
<input type='submit' name='loesung' value='$antwort[4]' style='width: 100px; height: 30px'></p>";
echo "</form>";

?>
</div>
</body>
</html>