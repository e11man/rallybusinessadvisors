<?php
// Load content if not already loaded
if (!isset($content)) {
    $content = require __DIR__ . '/../content.php';
}
?>
<section class="contact" id="contact">
    <div class="container">
        <!-- Contact Header -->
        <div class="contact-header">
            <div class="section-tag">Get in touch</div>
            <h2 class="contact-title">Ready to move your business forward? Let's talk.</h2>
            <p class="contact-subtitle">
                Whether you're seeking clarity, growth, or transformation, we're here to help.
                Reach out to start the conversation — no pressure, no obligation.
            </p>
        </div>

        <!-- Contact Content Grid -->
        <div class="contact-content">
            <!-- Contact Methods Cards -->
            <div class="contact-methods-grid">
                <!-- Email Card -->
                <div class="contact-card">
                    <div class="contact-card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="contact-card-title">Email Us</h3>
                    <p class="contact-card-description">Send us a message and we'll get back to you within 24 hours.</p>
                    <a href="mailto:<?php echo htmlspecialchars($content['contact']['email']); ?>" class="contact-card-link">
                        <?php echo htmlspecialchars($content['contact']['email']); ?>
                    </a>
                </div>

                <!-- Phone Card -->
                <div class="contact-card">
                    <div class="contact-card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 16.92V19.92C22.0011 20.1985 21.9441 20.4742 21.8325 20.7294C21.7209 20.9846 21.5573 21.2136 21.3521 21.4019C21.1469 21.5901 20.9046 21.7335 20.6407 21.8227C20.3769 21.9119 20.0975 21.9452 19.82 21.92C16.7428 21.5856 13.787 20.5341 11.19 18.85C8.77382 17.3146 6.72533 15.2661 5.18999 12.85C3.49997 10.2412 2.44824 7.27099 2.11999 4.18C2.09494 3.90347 2.12787 3.62476 2.21649 3.36162C2.30512 3.09849 2.44756 2.85669 2.63476 2.65189C2.82196 2.44708 3.0498 2.28367 3.30379 2.17189C3.55778 2.06011 3.83233 2.00252 4.10999 2.002H7.10999C7.59522 1.99522 8.06574 2.16708 8.43376 2.48353C8.80178 2.79999 9.042 3.23945 9.10999 3.72C9.23662 4.68007 9.47144 5.62273 9.80999 6.53C9.94454 6.88792 9.97348 7.27675 9.89382 7.65319C9.81416 8.02963 9.62877 8.36836 9.35999 8.62L8.08999 9.89C9.51355 12.4136 11.5864 14.4865 14.11 15.91L15.38 14.64C15.6316 14.3712 15.9704 14.1858 16.3468 14.1062C16.7233 14.0265 17.1121 14.0555 17.47 14.19C18.3773 14.5286 19.3199 14.7634 20.28 14.89C20.7658 14.9585 21.2094 15.2032 21.5265 15.5775C21.8437 15.9518 22.0122 16.4296 22 16.92Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="contact-card-title">Call Us</h3>
                    <p class="contact-card-description">Speak directly with our team for immediate assistance.</p>
                    <a href="tel:+1-555-RALLY-01" class="contact-card-link">
                        +1 (555) RALLY-01
                    </a>
                </div>

                <!-- Office Card -->
                <div class="contact-card">
                    <div class="contact-card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 10C21 17 12 23 12 23S3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="contact-card-title">Visit Us</h3>
                    <p class="contact-card-description">Schedule an in-person meeting at our office.</p>
                    <address class="contact-card-address">
                        <?php echo htmlspecialchars($content['footer']['address']['street']); ?><br>
                        <?php echo htmlspecialchars($content['footer']['address']['suite']); ?><br>
                        <?php echo htmlspecialchars($content['footer']['address']['city']); ?>
                    </address>
                </div>
            </div>

            <!-- Main CTA Section -->
            <div class="contact-cta-section">
                <div class="contact-cta-card">
                    <div class="contact-cta-content">
                        <div class="contact-cta-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="contact-cta-title">Book a Free Consultation</h3>
                        <p class="contact-cta-description">
                            Let's discuss your business goals and explore how we can help you achieve them.
                            No commitment required.
                        </p>
                        <a href="/contact.php" class="button-primary contact-cta-button">
                            Schedule Your Free Session
                            <svg class="button-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form Section -->
            <div class="contact-form-section">
                <div class="contact-form-card">
                    <div class="contact-form-header">
                        <h3 class="contact-form-title">Send us a Message</h3>
                        <p class="contact-form-subtitle">Fill out the form below and we'll get back to you as soon as possible.</p>
                    </div>
                    
                    <form class="contact-form" action="/api/contact.php" method="POST">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name" class="form-label">Full Name *</label>
                                <input type="text" id="name" name="name" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" id="email" name="email" class="form-input" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="company" class="form-label">Company</label>
                            <input type="text" id="company" name="company" class="form-input">
                        </div>
                        
                        <div class="form-group">
                            <label for="subject" class="form-label">Subject *</label>
                            <select id="subject" name="subject" class="form-select" required>
                                <option value="">Select a topic</option>
                                <option value="strategy">Strategic Planning</option>
                                <option value="consulting">Business Consulting</option>
                                <option value="coaching">Executive Coaching</option>
                                <option value="nonprofit">Non-Profit Services</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="form-label">Message *</label>
                            <textarea id="message" name="message" class="form-textarea" rows="5" placeholder="Tell us about your business goals and how we can help..." required></textarea>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="button-primary form-submit">
                                Send Message
                                <svg class="button-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 2L11 13M22 2L15 22L11 13M22 2L2 9L11 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>