<?php
// Your file name and path
$filePath = 'C:\xampp\htdocs\DownloadSoftware\Crossfire.rar';

// Set appropriate headers for file download
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
header('Content-Length: ' . filesize($filePath));

// Read the file and output its contents
readfile($filePath);
?>
