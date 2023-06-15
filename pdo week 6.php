<?php
$tijd = date("H:i");

if ($tijd < "12:00") {
echo "Goedemorgen";
} elseif ($tijd >= "12:00" && $tijd < "18:00") {
echo "Goedemiddag";
} else {
echo "Goedenavond";
}
?>

<?php
function bereken($getal1, $getal2) {
$gemiddelde = ($getal1 + $getal2) / 2;
echo "gemiddelde = " . $gemiddelde;
}

$getal1 = 16;
$getal2 = 2;
bereken($getal1, $getal2);
?>