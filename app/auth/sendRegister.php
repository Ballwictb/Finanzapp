<?php
session_start();


if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	header('HTTP/1.1 403 Forbidden');
	echo json_encode(['success' => false, 'message' => 'Acceso prohibido']);
	exit;
}

include_once "/config/database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $conn->real_escape_string($_POST['nombre'] ?? "");
	$email = $conn->real_escape_string($_POST['email'] ?? "");
	$password = $conn->real_escape_string($_POST['password'] ?? "");
	$notifications = $conn->real_escape_string($_POST['notifications'] ?? "0");

	$passwordEncrypt = password_hash($password, PASSWORD_DEFAULT);



	if ($conn->connect_error) {
		die("Error de conexión: " . $conn->connect_error);
	}

	$sql1 = ("SELECT name,email FROM users WHERE email = ? LIMIT 1");
	$stmt1 = $conn->prepare($sql1);
	$stmt1->bind_param("s", $email);
	$stmt1->execute();
	$result = $stmt1->get_result();

	if ($result->num_rows > 0) {
		echo json_encode(['success' => false, 'message' => 'Ya existe una cuenta con ese email']);
		$stmt1->close();
		$conn->close();
	} else {
		$stmt1->close();

		$sql = "INSERT INTO users (name, email, password, accept_news) VALUES (?, ?, ?, ?)";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("sssi", $name, $email, $passwordEncrypt, $notifications);
		if ($stmt->execute()) {
			echo json_encode(['success' => true, 'message' => 'Registro exitoso']);
		} else {
			echo json_encode(['success' => false, 'message' => 'Error al registrar el usuario']);
		}
	}
	$stmt->close();
	$conn->close();
} else {
	header('HTTP/1.1 405 Method Not Allowed');
	echo json_encode(['success' => false, 'message' => 'Método no permitido']);
	exit;
}
