<?php
 
 header('Content-Type: application/json');
 
 if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
     header('HTTP/1.1 403 Forbidden');
     echo json_encode([
         'success' => false,
         'message' => 'Access denied'
     ]);
     exit;
 }
 
 $inputJSON = file_get_contents('php://input');
 $data = json_decode($inputJSON, true);
 
 if (json_last_error() === JSON_ERROR_NONE) {
     $file = fopen('data.txt', 'a');
 
     if (is_array($data)) {
         foreach ($data as $entry) {
             fwrite($file, json_encode($entry, JSON_UNESCAPED_UNICODE) . PHP_EOL);
         }
     } else {
         fwrite($file, json_encode($data, JSON_UNESCAPED_UNICODE) . PHP_EOL);
     }
 
     fclose($file);
 
     echo json_encode([
         'success' => true,
         'message' => 'Data saved successfully'
     ]);
 } else {
     echo json_encode([
         'success' => false,
         'message' => 'Invalid JSON'
     ]);
 }
