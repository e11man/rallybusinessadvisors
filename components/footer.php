<?php
// Load content if not already loaded
if (!isset($content)) {
    $content = require __DIR__ . '/../content.php';
}
?>
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <!-- Footer Top Section -->
            <div class="footer-top">
                <!-- Company Info -->
                <div class="footer-brand">
                    <div class="logo">
                        <div class="logo-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="logo-text"><?php echo htmlspecialchars($content['site_title']); ?></span>
                    </div>
                    <p class="footer-tagline"><?php echo htmlspecialchars($content['tagline']); ?></p>
                    <p class="footer-description"><?php echo htmlspecialchars($content['footer']['description']); ?></p>
                </div>

                <!-- Quick Links -->
                <div class="footer-links">
                    <h3 class="footer-heading">Quick Links</h3>
                    <ul class="footer-nav">
                        <li><a href="/" class="footer-link"><?php echo htmlspecialchars($content['navigation']['home']); ?></a></li>
                        <li><a href="/services.php" class="footer-link"><?php echo htmlspecialchars($content['navigation']['services']); ?></a></li>
                        <li><a href="/about.php" class="footer-link"><?php echo htmlspecialchars($content['navigation']['about']); ?></a></li>
                        <li><a href="/contact.php" class="footer-link"><?php echo htmlspecialchars($content['navigation']['contact']); ?></a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="footer-services">
                    <h3 class="footer-heading">Our Services</h3>
                    <ul class="footer-nav">
                        <?php foreach ($content['services']['items'] as $service): ?>
                        <li><a href="/services.php" class="footer-link"><?php echo htmlspecialchars($service['title']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="footer-contact">
                    <h3 class="footer-heading">Get In Touch</h3>
                    <div class="contact-info">
                        <div class="contact-item">
                            <svg class="contact-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="mailto:<?php echo htmlspecialchars($content['contact']['email']); ?>" class="contact-link"><?php echo htmlspecialchars($content['contact']['email']); ?></a>
                        </div>
                        <div class="contact-item">
                            <svg class="contact-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 16.92V19.92C22.0011 20.1985 21.9441 20.4742 21.8325 20.7294C21.7209 20.9846 21.5573 21.2136 21.3521 21.4019C21.1469 21.5901 20.9046 21.7335 20.6407 21.8227C20.3769 21.9119 20.0975 21.9452 19.82 21.92C16.7428 21.5856 13.787 20.5341 11.19 18.85C8.77382 17.3146 6.72533 15.2661 5.18999 12.85C3.49997 10.2412 2.44824 7.27099 2.11999 4.18C2.09494 3.90347 2.12787 3.62476 2.21649 3.36162C2.30512 3.09849 2.44756 2.85669 2.63476 2.65189C2.82196 2.44708 3.0498 2.28367 3.30379 2.17189C3.55778 2.06011 3.83233 2.00252 4.10999 2.002H7.10999C7.59522 1.99522 8.06574 2.16708 8.43376 2.48353C8.80178 2.79999 9.042 3.23945 9.10999 3.72C9.23662 4.68007 9.47144 5.62273 9.80999 6.53C9.94454 6.88792 9.97348 7.27675 9.89382 7.65319C9.81416 8.02963 9.62877 8.36836 9.35999 8.62L8.08999 9.89C9.51355 12.4136 11.5864 14.4865 14.11 15.91L15.38 14.64C15.6316 14.3712 15.9704 14.1858 16.3468 14.1062C16.7233 14.0265 17.1121 14.0555 17.47 14.19C18.3773 14.5286 19.3199 14.7634 20.28 14.89C20.7658 14.9585 21.2094 15.2032 21.5265 15.5775C21.8437 15.9518 22.0122 16.4296 22 16.92Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="contact-text"><?php echo htmlspecialchars($content['footer']['phone']); ?></span>
                        </div>
                        <div class="contact-item">
                            <svg class="contact-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10C21 17 12 23 12 23S3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="contact-text"><?php echo htmlspecialchars($content['footer']['address']['street']); ?><br><?php echo htmlspecialchars($content['footer']['address']['suite']); ?><br><?php echo htmlspecialchars($content['footer']['address']['city']); ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom Section -->
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p class="copyright"><?php echo htmlspecialchars($content['footer']['copyright']); ?></p>
                    <div class="footer-actions">
                        <a href="/contact.php" class="button-primary">Book a Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> 