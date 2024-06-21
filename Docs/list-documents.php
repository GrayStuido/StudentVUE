<?php
header('Content-Type: application/json');

$documentPath = './documents/';
$documents = glob($documentPath . '*.html');

$documentNames = array_map(function($path) use ($documentPath) {
    return str_replace($documentPath, '', $path);
}, $documents);

echo json_encode($documentNames);