<?php
$servername = "localhost:3307";
$username = "";
$password = "";
$dbname = "winkel";
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = "SELECT * FROM productie";
$stmt = $conn->prepare($query);
$stmt->execute();
echo "<h2>Alle producten:</h2>";
echo "<ul>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
echo "<li>" . $row['product_naam'] . " - " . $row['product_prijs'] . "</li>";
}
echo "</ul>";
} catch (PDOException $e) {
echo "Fout bij de databaseverbinding: " . $e->getMessage();
}
$conn = null;
?>
<?php
try {
$query = "SELECT * FROM productie WHERE product_code = ?";
$stmt = $conn->prepare($query);
$productCode = 1;
$stmt->execute([$productCode]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
echo "<h2>Product met product_code 1:</h2>";
echo "<p>Naam: " . $row['product_naam'] . "</p>";
echo "<p>Prijs: " . $row['product_prijs'] . "</p>";
} catch (PDOException $e) {
echo "Fout bij de databaseverbinding: " . $e->getMessage();
}
$conn = null;
?>
<?php
try {
$query = "SELECT * FROM prodcutie WHERE product_code = :productCode";
$stmt = $conn-> prepare($query);
$productCode = 2;
$stmt->bindParam(':productCode', $productCode);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
echo "<h2>Product met product_code 2:</h2>";
echo "<p>Naam: " . $row['product_naam'] . "</p>";
echo "<p>Prijs: " . $row['product_prijs'] . "</p>";
} catch (PDOException $e) {
echo "Fout bij de databaseverbinding: " . $e->getMessage();
}
$conn = null;
?>