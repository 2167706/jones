<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "winkel";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$product_naam = $_POST["product_naam"];
$prijs_per_stuk = $_POST["prijs_per_stuk"];
$omschrijving = $_POST["omschrijving"];
$sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving)
VALUES ('cola', '0,70', 'drinken'),('fanta', '0,76', 'drinken'),('patat', '1,70', 'eten'),
('pizza', '16,70', 'eten'),('bebzi', '0,69', 'drinken')";
if ($conn->query($sql) === TRUE) {
echo "Product succesvol toegevoegd.<br>";
} else {
echo "Fout bij het toevoegen van het product: " . $conn->error . "<br>";
}
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<title>Product toevoegen</title>
</head>
<body>
<h2>Product toevoegen</h2>
<form method="POST" action="insert.php">
<label for="product_naam">Productnaam:</label>
<input type="text" name="product_naam" required><br>
<label for="prijs_per_stuk">Prijs per stuk:</label>
<input type="number" step="0.01" name="prijs_per_stuk" required><br>
<label for="omschrijving">Omschrijving:</label>
<textarea name="omschrijving" rows="4" cols="50" required></textarea><br>
<input type="submit" value="Product toevoegen">
</form>
</body>
</html>