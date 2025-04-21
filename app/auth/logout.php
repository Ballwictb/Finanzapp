<?php

session_start();


if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	header('HTTP/1.1 403 Forbidden');
	echo json_encode(['success' => false, 'message' => 'Acceso prohibido']);
	exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	header('HTTP/1.1 405 Method Not Allowed');
	echo json_encode(['success' => false, 'message' => 'Método no permitido']);
	exit;
}

session_unset();
session_destroy();

echo json_encode(['success' => true, 'message' => 'Sesión cerrada correctamente']);




?>
