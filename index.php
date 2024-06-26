<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Download Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Simulate a file download by redirecting to a PHP script
            window.location.href = 'download.php';
        });
    </script>
</head>
<body>
</body>
</html>
