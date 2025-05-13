<?php

session_start();

if (!isset($_SERVER["HTTP_X_REQUESTED_WITH"]) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != "xmlhttprequest") {
	header('HTTP/1.1 403 Forbidden');
	echo json_encode(['success' => false,'message' => "Acceso prohibido"]);
	exit;
}

if (isset($_SESSION['user']['email'])) {
	$email = $_SESSION['user']['email'];
} else {
	echo json_encode(['success' => false, 'message' => "No hay una sesión activa con email."]);
	exit;
}


include_once "../../config/database.php";

$sql = ("DELETE FROM users WHERE email LIKE ?" );
$stmt = $conn->prepare($sql);
$stmt->bind_param("s",$email);
$stmt->execute();

$stmt->close();
$conn->close();
session_unset();
session_destroy();
// include_once "./logout.php";

echo json_encode(['success' => true, 'message' => "Usuario eliminado correctamente."]);

?>
