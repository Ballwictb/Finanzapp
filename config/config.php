<?php

$host = $_SERVER['HTTP_HOST'] ?? '';

// Detectar entorno automáticamente
if ($host === 'localhost') {
    define('BASE_URL', '/FinanzApp'); // Localhost con carpeta
} else {
    define('BASE_URL', ''); // Producción en dominio raíz
}

// Iniciar sesión si no está iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Detectar idioma (por URL, sesión o valor por defecto)
$lang = $_GET['lang'] ?? $_SESSION['lang'] ?? 'es';

// Guardar idioma en la sesión
$_SESSION['lang'] = $lang;

// Ruta del archivo de idioma
$langFile = __DIR__ . "/../langs/$lang.json";

// Cargar traducciones
if (file_exists($langFile)) {
    $translations = json_decode(file_get_contents($langFile), true);
} else {
    $translations = json_decode(file_get_contents(__DIR__ . "/../langs/es.json"), true);
}
