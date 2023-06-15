<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "winkel";

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
die("Kan geen verbinding maken met de database: " . $e->getMessage());
}

$sql = "SELECT * FROM producten";
echo "<h2>Alle producten:</h2>";
try {
$stmt = $conn->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
echo "<ul>";
foreach ($result as $row) {
echo "<li><strong>Productnaam:</strong> " . $row['product_naam'] . "</li>";
echo "<li><strong>Prijs per stuk:</strong> " . $row['prijs_per_stuk'] . "</li>";
echo "<li><strong>Omschrijving:</strong> " . $row['omschrijving'] . "</li>";
echo "<br>";
}
echo "</ul>";
} catch(PDOException $e) {
echo "Fout bij het selecteren van gegevens: " . $e->getMessage();
}



$sql = "SELECT * FROM producten WHERE product_code = ?";
echo "<h2>Product met product_code 1:</h2>";
try {
$stmt = $conn->prepare($sql);
$stmt->execute([1]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
echo "<ul>";
echo "<li><strong>Productnaam:</strong> " . $row['product_naam'] . "</li>";
echo "<li><strong>Prijs per stuk:</strong> " . $row['prijs_per_stuk'] . "</li>";
echo "<li><strong>Omschrijving:</strong> " . $row['omschrijving'] . "</li>";
echo "</ul>";
} catch(PDOException $e) {
echo "Fout bij het selecteren van gegevens: " . $e->getMessage();
}


$sql = "SELECT * FROM producten WHERE product_code = :product_code";

echo "<h2>Product met product_code 2:</h2>";
try {
$stmt = $conn->prepare($sql);
$stmt->bindParam(':product_code', $product_code);
$product_code = 2;
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
echo "<ul>";
echo "<li><strong>Productnaam:</strong> " . $row['product_naam'] . "</li>";
echo "<li><strong>Prijs per stuk:</strong> " . $row['prijs_per_stuk'] . "</li>";
echo "<li><strong>Omschrijving:</strong> " . $row['omschrijving'] . "</li>";
echo "</ul>";
} catch(PDOException $e) {
echo "Fout bij het selecteren van gegevens: " . $e->getMessage();
}
?>