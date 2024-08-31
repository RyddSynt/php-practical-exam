<?php
include 'functions.php';

// Set the default timezone to Philippine Time
date_default_timezone_set('Asia/Manila');

// Get the name parameter from the URL, default to 'World' if not provided
$name = isset($_GET['name']) ? $_GET['name'] : 'World';
$greeting = generateGreeting($name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practical Exam</title>
</head>
<body>
    <h1><?php echo $greeting; ?></h1>
    <p>Current date and time in the Philippines: <?php echo date('Y-m-d H:i:s'); ?></p>
</body>
</html>
