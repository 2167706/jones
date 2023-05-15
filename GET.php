<!DOCTYPE html>
<html>
<head>
    <title>GET Formulier</title>
</head>
<body>
    <h2>GET Formulier</h2>
    <form method="GET" action="get.php">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required><br><br>
        <label for="achternaam">Achternaam:</label>
        <input type="text" id="achternaam" name="achternaam" required><br><br>
        <label for="leeftijd">Leeftijd:</label>
        <input type="number" id="leeftijd" name="leeftijd" required><br><br>
        <label for="adres">Adres:</label>
        <input type="text" id="adres" name="adres" required><br><br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Verzenden">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["naam"]) && isset($_GET["achternaam"]) && isset($_GET["leeftijd"]) && isset($_GET["adres"]) && isset($_GET["email"])) {
            $naam = $_GET["naam"];
            $achternaam = $_GET["achternaam"];
            $leeftijd = $_GET["leeftijd"];
            $adres = $_GET["adres"];
            $email = $_GET["email"];
            echo "<h2>Ingevoerde gegevens:</h2>";
            echo "Naam: $naam<br>";
            echo "Achternaam: $achternaam<br>";
            echo "Leeftijd: $leeftijd<br>";
            echo "Adres: $adres<br>";
            echo "E-mail: $email<br>";
        }
    }
    ?>
</body>
</html>