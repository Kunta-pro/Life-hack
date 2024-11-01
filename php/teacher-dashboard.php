<?php
session_start();
require 'config.php';

// Teacher dashboard code
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Teacher Dashboard</title>
</head>
<body>
    <h1>Teacher Dashboard</h1>
    <button onclick="location.href='upload-marks.php'">Upload Marks</button>
</body>
</html>
