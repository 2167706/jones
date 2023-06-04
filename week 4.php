week 4.1

<?php
for ($num = 0; $num <= 50; $num++) {
    echo $num . "\n";
}
?>


week4.2

<?php
$klasgenoten = array("Alice","Bob","Charlie","David","Eve","Frank","Grace","Hannah","Isaac","Julia");
foreach ($klasgenoten as $naam) {
    echo $naam . "<br>";
}
?>


week4.3

<?php
$maanden = ['Januari','Februari','Maart','April','Mei','Juni','Juli','Augustus','September','Oktober','November','December']; 
for ($i = 0; $i < count($maanden); $i++) {
    echo 'Maand ' . ($i + 1) . ' is ' . $maanden[$i] . '.<br />';
}
?>