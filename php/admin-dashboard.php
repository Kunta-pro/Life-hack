<?php
session_start();
require 'config.php';

// Admin dashboard code
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <button onclick="location.href='register-student.php'">Register Student</button>
    <button onclick="location.href='manage-teachers.php'">Manage Teachers</button>
    <button onclick="location.href='manage-students.php'">Manage Students</button>
</body>
</html>
