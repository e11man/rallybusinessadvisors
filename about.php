<?php
// Load the content
$content = require 'content.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - <?php echo htmlspecialchars($content['site_title']); ?></title>
    <meta name="description" content="Learn about <?php echo htmlspecialchars($content['site_title']); ?> - strategic minds delivering real-world impact for business growth.">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🚀</text></svg>">
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Preload critical fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <!-- Header -->
    <?php include 'components/header.php'; ?>
    
    <!-- About Section -->
    <?php include 'components/about.php'; ?>
    
    <!-- Stats Section -->
    <?php include 'components/stats.php'; ?>
    
    <!-- Footer -->
    <?php include 'components/footer.php'; ?>
</body>
</html>