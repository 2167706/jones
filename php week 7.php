<?php
session_start();

// Variabelen instellen
$naam = "John Doe";
$email = "johndoe@example.com";

// Variabelen opslaan in de sessie
$_SESSION['naam'] = $naam;
$_SESSION['email'] = $email;
?>

