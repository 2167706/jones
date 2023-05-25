<?php
//Deel 1
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
$myArray[] = 'boot';
foreach ($myArray as $value) {
    echo $value . "\n";
}
//Deel2
$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];
$arrayCount = count($myArray);
$myArray[] = 'boot';
echo " Het array heeft " . $arrayCount . " elementen.\n";
foreach ($myArray as $value) {
    echo $value . "\n";
}
//Deel 3
//bij regel 2 word bar afgedrukt
//bij regel 5 word 4 afgedrukt
// bij regel 8 word Toyota afgedrukt
// bij regel 9 word volvo bmw toyota afgedrukt
//bij regel 12 word 5 afgedrukt
// bij regel 19 word five afgedrukt
//deel 4a
$cijfersphp = [4.4, 4.6, 5.6, 6., 7.6, 7.2];
$gemiddelde = round(array_sum($cijfersphp) / count($cijfersphp), 1);
echo "gemiddelde is: ".$gemiddelde;
//deel 4b
//Ik denk dat het beter is om de regels samen te voegen, omdat het de code vereenvoudigt en de leesbaarheid verbetert
?>
