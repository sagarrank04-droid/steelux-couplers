<?php

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

// Map /orin/xxx to public/xxx
$subPath = preg_replace('#^/orin/#', '/', $uri);
$subPath = preg_replace('#^/#', '', $subPath);

$ext = strtolower(pathinfo($subPath, PATHINFO_EXTENSION));

if (!empty($subPath) && $ext !== 'php' && file_exists(__DIR__.'/public/'.$subPath) && !is_dir(__DIR__.'/public/'.$subPath)) {
    $filePath = __DIR__.'/public/'.$subPath;
    $mimes = [
        'css' => 'text/css',
        'js'  => 'application/javascript',
        'svg' => 'image/svg+xml',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'png' => 'image/png',
        'webp' => 'image/webp',
        'ico' => 'image/x-icon',
        'pdf' => 'application/pdf',
        'woff' => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf' => 'font/ttf'
    ];
    $contentType = $mimes[$ext] ?? mime_content_type($filePath);
    header("Content-Type: $contentType");
    readfile($filePath);
    exit;
}

require_once __DIR__.'/public/index.php';
