<?php
// Load the content
$content = require 'content.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - <?php echo htmlspecialchars($content['site_title']); ?></title>
    <meta name="description" content="Discover our comprehensive business consulting services - from strategic planning to operational excellence.">
    
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
    
    <!-- Services Section -->
    <?php include 'components/services.php'; ?>
    
    <!-- Footer -->
    <?php include 'components/footer.php'; ?>
    
    <!-- Mobile Menu JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu functionality
            const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
            const mobileNav = document.querySelector('.nav');

            if (mobileMenuToggle && mobileNav) {
                mobileMenuToggle.addEventListener('click', function() {
                    const isActive = mobileNav.classList.contains('active');
                    
                    mobileNav.classList.toggle('active');
                    mobileMenuToggle.classList.toggle('active');
                    mobileMenuToggle.setAttribute('aria-expanded', !isActive);
                    
                    // Prevent body scroll when menu is open
                    document.body.style.overflow = isActive ? 'auto' : 'hidden';
                });
                
                // Close menu when clicking on nav links
                const navLinks = document.querySelectorAll('.nav-link');
                navLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        mobileNav.classList.remove('active');
                        mobileMenuToggle.classList.remove('active');
                        mobileMenuToggle.setAttribute('aria-expanded', 'false');
                        document.body.style.overflow = 'auto';
                    });
                });

                // Close menu when clicking outside
                document.addEventListener('click', function(e) {
                    if (!mobileNav.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
                        if (mobileNav.classList.contains('active')) {
                            mobileNav.classList.remove('active');
                            mobileMenuToggle.classList.remove('active');
                            mobileMenuToggle.setAttribute('aria-expanded', 'false');
                            document.body.style.overflow = 'auto';
                        }
                    }
                });
            }
        });
    </script>
</body>
</html>