<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


//Detect the language (by URL, session or default)
$lang = $_GET['lang'] ?? $_SESSION['lang'] ?? 'es'; // Predetermined to Spanish

// Save the language in session
$_SESSION['lang'] = $lang;

// Load the JSON file of the language
$langFile = "./langs/$lang.json";

if (file_exists($langFile)) {
    $translations = json_decode(file_get_contents($langFile), true);
} else {
    $translations = json_decode(file_get_contents("./langs/es.json"), true); // Spanish by default
}
