<?php
http_response_code(404);
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

include_once $_SERVER['DOCUMENT_ROOT'] . '/FinanzApp/config.php';
?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?? 'es'; ?>">
<head>
    <title>Error 404 - Page not found</title>
    <style>
        .error-container { text-align: center; padding: 50px; }
        .btn { display: inline-block; padding: 10px 20px; background: #0066cc; color: white; text-decoration: none; }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>Error 404</h1>
        <p><?php echo $translations['errors']['404']['message']?></p>
        <a href="/FinanzApp/index.php" class="btn">
            <?php echo $translations['general']['goBack']?>
        </a>
    </div>
</body>
</html>