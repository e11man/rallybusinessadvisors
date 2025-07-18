<?php
// Load content if not already loaded
if (!isset($content)) {
    $content = require '../content.php';
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

        <!-- Contact CTA -->
        <div class="contact-cta">
            <a href="mailto:hello@rallybusinessadvisors.com" class="contact-button">
                <div class="contact-button-content">
                    <div class="contact-logo">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="contact-brand">Rally</span>
                    </div>
                    <span class="contact-action">Book a free consultation</span>
                </div>
            </a>
        </div>

        <!-- Contact Information -->
        <div class="contact-info">
            <div class="contact-methods">
                <div class="contact-method">
                    <h4 class="contact-method-title">Email</h4>
                    <a href="mailto:hello@rallybusinessadvisors.com" class="contact-link">
                        hello@rallybusinessadvisors.com
                    </a>
                </div>
                
                <div class="contact-method">
                    <h4 class="contact-method-title">Phone</h4>
                    <a href="tel:+1-555-RALLY-01" class="contact-link">
                        +1 (555) RALLY-01
                    </a>
                </div>
                
                <div class="contact-method">
                    <h4 class="contact-method-title">Office</h4>
                    <address class="contact-address">
                        123 Business District<br>
                        Suite 456<br>
                        Corporate City, ST 12345
                    </address>
                </div>
            </div>
        </div>
    </div>
</section>