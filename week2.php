<?php
$variabele1 = 10;
$variabele2 = 10;
if ($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
} else {
    echo "De twee waarden zijn ongelijk";
}
$variabele1 = 10;
$variabele2 = 12;
if ($variabele1 != $variabele2) {
    echo "De twee waarden zijn ongelijk";
}
$variabele1 = 10;
$variabele2 = 10;
if ($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
} else {
    echo "De twee waarden zijn ongelijk";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    echo "Username: $username<br>";
    echo "Password: $password<br>";
}
?>