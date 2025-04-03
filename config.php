<?php

//Detect the language (by URL, session or default)
$lang = $_GET['lang'] ?? $_SESSION['lang'] ?? 'es'; // Predetermined to Spanish

// Save the language in session
$_SESSION['lang'] = $lang;

// Load the JSON file of the language
$langFile = __DIR__ . "/langs/$lang.json";

if (file_exists($langFile)) {
    $translations = json_decode(file_get_contents($langFile), true);
} else {
    $translations = json_decode(file_get_contents(__DIR__ . "/langs/es.json"), true); // Spanish by default
}
?>
