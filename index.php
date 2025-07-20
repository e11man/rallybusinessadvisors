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
    
    <!-- Footer -->
    <?php include 'components/footer.php'; ?>
    
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
            
            // Make all sections visible immediately on page load
            const sections = document.querySelectorAll('.services, .stats, .about, .contact, .service-card, .stat-item');
            sections.forEach(section => {
                section.style.opacity = '1';
                section.style.transform = 'translateY(0)';
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
            
            // Contact form handling
            const contactForm = document.querySelector('.contact-form');
            if (contactForm) {
                contactForm.addEventListener('submit', async function(e) {
                    e.preventDefault();
                    
                    const submitButton = this.querySelector('.form-submit');
                    const originalText = submitButton.innerHTML;
                    
                    // Show loading state
                    submitButton.innerHTML = `
                        <svg class="animate-spin" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-dasharray="31.416" stroke-dashoffset="31.416">
                                <animate attributeName="stroke-dasharray" dur="2s" values="0 31.416;15.708 15.708;0 31.416" repeatCount="indefinite"/>
                                <animate attributeName="stroke-dashoffset" dur="2s" values="0;-15.708;-31.416" repeatCount="indefinite"/>
                            </circle>
                        </svg>
                        Sending...
                    `;
                    submitButton.disabled = true;
                    
                    // Collect form data
                    const formData = new FormData(this);
                    const data = Object.fromEntries(formData);
                    
                    try {
                        const response = await fetch('/api/contact.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify(data)
                        });
                        
                        const result = await response.json();
                        
                        if (result.success) {
                            // Show success message
                            showNotification(result.message, 'success');
                            this.reset();
                        } else {
                            // Show error message
                            showNotification(result.message, 'error');
                        }
                    } catch (error) {
                        showNotification('Network error. Please try again.', 'error');
                    } finally {
                        // Reset button
                        submitButton.innerHTML = originalText;
                        submitButton.disabled = false;
                    }
                });
            }
            
            // Notification system
            function showNotification(message, type = 'info') {
                // Remove existing notifications
                const existingNotifications = document.querySelectorAll('.notification');
                existingNotifications.forEach(notification => notification.remove());
                
                // Create notification element
                const notification = document.createElement('div');
                notification.className = `notification notification-${type}`;
                notification.innerHTML = `
                    <div class="notification-content">
                        <span class="notification-message">${message}</span>
                        <button class="notification-close" onclick="this.parentElement.parentElement.remove()">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                `;
                
                // Add to page
                document.body.appendChild(notification);
                
                // Auto-remove after 5 seconds
                setTimeout(() => {
                    if (notification.parentElement) {
                        notification.remove();
                    }
                }, 5000);
            }
        });
    </script>
</body>
</html> 