<?php

// Detectar el idioma (por URL, sesión o predeterminado)
$lang = $_GET['lang'] ?? $_SESSION['lang'] ?? 'es'; // Predeterminado a español

// Guardar el idioma en sesión
$_SESSION['lang'] = $lang;

// Cargar el archivo JSON del idioma
$langFile = __DIR__ . "/langs/$lang.json";

if (file_exists($langFile)) {
    $translations = json_decode(file_get_contents($langFile), true);
} else {
    $translations = json_decode(file_get_contents(__DIR__ . "/langs/es.json"), true); // Español por defecto
}
?>
