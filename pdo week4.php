<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Winkel";
try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$conn = null;
?>

<?php
//selecteer alles van je database
// hoe je alles selecteert in een query zonder variable
$stmt = $pdo->query("SELECT * FROM producte");  //select al je data
$resultaat1 = $stmt->fetchAll();  //fetchAll pakt alle items in de db tabel

foreach ($resultaat as $row) {
    echo $row['product_code'] . "br/>";
    echo $row['product_naam'] . "br/>";
    echo $row['prijs_per_stuk'] . "br/>";
    echo $row['omschrijving'] . "br/>";
 }
 //deel2

 //hoe je een single row selecteert met placeholder
 $zoek_product_code = 1;
 $stmt = $pdo->prepare("SELECTFROM producte WHERE product_code = ?");
 $stmt->exute([$zoek_product_code]); //zoket row in database
$resultaat2 = $stmt->fetch(); //fetch() eem item van de db tabel

// zo print je het
foreach ($resultaat2 as $row) {
    echo $row['product_code'] . "br/>";
    echo $row['product_naam'] . "br/>";
    echo $row['prijs_per_stuk'] . "br/>";
    echo $row['omschrijving'] . "br/>";
 }
//named parometer is met te naam
//placeholder is ?
 //met named parometer
 $zoek_product_code = 2;
 $stmt = $pdo->prepare("SELECTFROM producte WHERE product_code = :product_code");
 $stmt->exute([$zoek_product_code]); //zoket row in database
$resultaat3 = $stmt->fetch();
foreach ($resultaat3 as $row) {
    echo $row['product_code'] . "br/>";
    echo $row['product_naam'] . "br/>";
    echo $row['prijs_per_stuk'] . "br/>";
    echo $row['omschrijving'] . "br/>";
 }
 exit;