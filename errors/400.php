<?php
http_response_code(400);
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

include $_SERVER['DOCUMENT_ROOT'] . '/FinanzApp/config.php';
?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?? 'es'; ?>">
<head>
    <title>Error 400 - Bad request</title>
    <style>
        .error-container { text-align: center; padding: 50px; }
        .btn { display: inline-block; padding: 10px 20px; background: #0066cc; color: white; text-decoration: none; }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>Error 400</h1>
        <p><?php echo $translations['errors']['400']['message']?></p>
        <a href="/FinanzApp/index.php" class="btn">
            <?php echo $translations['general']['goBack']?>
        </a>
    </div>
</body>
</html>