<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "winkel";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Verbinding mislukt: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_naam = $_POST["product_naam"];
    $prijs_per_stuk = $_POST["prijs_per_stuk"];
    $omschrijving = $_POST["omschrijving"];

    $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving)
            VALUES (:product_naam, :prijs_per_stuk, :omschrijving)";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':product_naam', $product_naam);
        $stmt->bindParam(':prijs_per_stuk', $prijs_per_stuk);
        $stmt->bindParam(':omschrijving', $omschrijving);
        $stmt->execute();
        echo "Product succesvol toegevoegd.<br>";
    } catch(PDOException $e) {
        echo "Fout bij het toevoegen van het product: " . $e->getMessage() . "<br>";
    }
}

$conn = null;
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