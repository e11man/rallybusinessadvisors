<?php
// Load the content
$content = require 'content.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($content['site_title']); ?> - <?php echo htmlspecialchars($content['tagline']); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($content['hero']['description']); ?>">
    
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
    
    <!-- Hero Section -->
    <?php include 'components/hero.php'; ?>
    
    <!-- Services Section -->
    <?php include 'components/services.php'; ?>
    
    <!-- Stats Section -->
    <?php include 'components/stats.php'; ?>
    
    <!-- About Section -->
    <?php include 'components/about.php'; ?>
    
    <!-- Contact Section -->
    <?php include 'components/contact.php'; ?>
    
    <!-- Enhanced JavaScript -->
    <script>
        // Enhanced interactions and animations
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling for navigation links
            const navLinks = document.querySelectorAll('a[href^="#"]');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        const headerHeight = document.querySelector('.header').offsetHeight;
                        const targetPosition = targetElement.offsetTop - headerHeight - 20;
                        
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Enhanced header scroll effect
            const header = document.querySelector('.header');
            let lastScrollY = window.scrollY;
            
            window.addEventListener('scroll', () => {
                const currentScrollY = window.scrollY;
                
                if (currentScrollY > 100) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
                
                lastScrollY = currentScrollY;
            });
            
            // Feature accordion functionality
            const featureToggles = document.querySelectorAll('.feature-toggle');
            
            featureToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const isExpanded = this.getAttribute('aria-expanded') === 'true';
                    const content = this.closest('.feature-item').querySelector('.feature-content');
                    
                    // Close all other features
                    featureToggles.forEach(otherToggle => {
                        if (otherToggle !== this) {
                            otherToggle.setAttribute('aria-expanded', 'false');
                            otherToggle.closest('.feature-item').querySelector('.feature-content').classList.remove('active');
                        }
                    });
                    
                    // Toggle current feature
                    this.setAttribute('aria-expanded', !isExpanded);
                    content.classList.toggle('active');
                });
            });
            
            // Intersection Observer for scroll animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);
            
            // Observe sections for animations
            const sections = document.querySelectorAll('.services, .stats, .about, .contact');
            sections.forEach(section => {
                section.style.opacity = '0';
                section.style.transform = 'translateY(30px)';
                section.style.transition = 'opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), transform 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
                observer.observe(section);
            });
            
            // Staggered animation for service cards
            const serviceCards = document.querySelectorAll('.service-card');
            serviceCards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(40px) scale(0.95)';
                card.style.transition = `opacity 0.6s cubic-bezier(0.4, 0, 0.2, 1) ${index * 0.2}s, transform 0.6s cubic-bezier(0.4, 0, 0.2, 1) ${index * 0.2}s`;
                observer.observe(card);
            });
            
            // Staggered animation for stat items
            const statItems = document.querySelectorAll('.stat-item');
            statItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(30px)';
                item.style.transition = `opacity 0.6s cubic-bezier(0.4, 0, 0.2, 1) ${index * 0.15}s, transform 0.6s cubic-bezier(0.4, 0, 0.2, 1) ${index * 0.15}s`;
                observer.observe(item);
            });
            
            // Parallax effect for hero background
            let ticking = false;
            
            function updateParallax() {
                const scrolled = window.pageYOffset;
                const heroBackground = document.querySelector('.hero-background');
                if (heroBackground) {
                    heroBackground.style.transform = `translateY(${scrolled * 0.3}px)`;
                }
                ticking = false;
            }
            
            window.addEventListener('scroll', () => {
                if (!ticking) {
                    requestAnimationFrame(updateParallax);
                    ticking = true;
                }
            });
            
            // Add magnetic effect to buttons
            const buttons = document.querySelectorAll('.button-primary, .button-secondary, .service-button, .contact-button');
            
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function(e) {
                    this.style.transition = 'transform 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
                });
                
                button.addEventListener('mousemove', function(e) {
                    const rect = this.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const moveX = (x - centerX) * 0.08;
                    const moveY = (y - centerY) * 0.08;
                    
                    this.style.transform = `translate(${moveX}px, ${moveY}px) scale(1.02)`;
                });
                
                button.addEventListener('mouseleave', function() {
                    this.style.transform = 'translate(0, 0) scale(1)';
                    this.style.transition = 'transform 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
                });
            });
            
            // Add hover effects to service cards
            const serviceCardsHover = document.querySelectorAll('.service-card');
            
            serviceCardsHover.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    const icon = this.querySelector('.service-icon');
                    const image = this.querySelector('.placeholder-image');
                    
                    if (icon) {
                        icon.style.transform = 'scale(1.1) rotate(5deg)';
                    }
                    if (image) {
                        image.style.transform = 'scale(1.05)';
                    }
                });
                
                card.addEventListener('mouseleave', function() {
                    const icon = this.querySelector('.service-icon');
                    const image = this.querySelector('.placeholder-image');
                    
                    if (icon) {
                        icon.style.transform = 'scale(1) rotate(0deg)';
                    }
                    if (image) {
                        image.style.transform = 'scale(1)';
                    }
                });
            });
        });
    </script>
</body>
</html> 