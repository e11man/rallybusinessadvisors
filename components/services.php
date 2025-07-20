<?php
// Load content if not already loaded
if (!isset($content)) {
    $content = require __DIR__ . '/../content.php';
}
?>
<section class="services" id="services">
    <div class="container">
        <!-- Services Intro -->
        <div class="services-intro">
            <div class="section-tag"><?php echo htmlspecialchars($content['services']['title']); ?></div>
            <h2 class="section-title">Innovative solutions for real world challenges</h2>
            <p class="section-description">
                We deliver sharp, results-driven consulting across the core areas of 
                business success. Whether you're scaling, restructuring, or innovating — 
                we're here to guide your next bold move.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="services-grid">
            <?php foreach ($content['services']['items'] as $index => $service): ?>
            <div class="service-card" data-service="<?php echo $index; ?>">
                <!-- Service Header -->
                <div class="service-header">
                    <div class="service-icon">
                        <?php if ($index === 0): // ALIGN 360 Framework ?>
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="2" fill="none"/>
                            <circle cx="24" cy="24" r="12" stroke="currentColor" stroke-width="2" fill="none"/>
                            <circle cx="24" cy="24" r="4" fill="currentColor"/>
                            <path d="M24 4V8M24 40V44M4 24H8M40 24H44" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <path d="M35.36 12.64L32.95 15.05M15.05 32.95L12.64 35.36M35.36 35.36L32.95 32.95M15.05 15.05L12.64 12.64" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <?php elseif ($index === 1): // Non-Profit Consulting ?>
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 4L6 12V22C6 34 24 44 24 44C24 44 42 34 42 22V12L24 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18 20L22 24L30 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <?php else: // Executive & Career Coaching ?>
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 4C35.046 4 44 12.954 44 24C44 35.046 35.046 44 24 44C12.954 44 4 35.046 4 24C4 12.954 12.954 4 24 4Z" stroke="currentColor" stroke-width="2"/>
                            <path d="M16 24L20 28L32 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M24 12V16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <path d="M24 32V36" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <?php endif; ?>
                    </div>
                    <div class="service-badge">
                        <?php if ($index === 0): ?>
                        <span class="badge-text">SIGNATURE</span>
                        <?php elseif ($index === 1): ?>
                        <span class="badge-text">SPECIALIZED</span>
                        <?php else: ?>
                        <span class="badge-text">PERSONAL</span>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Service Content -->
                <div class="service-content">
                    <h3 class="service-title"><?php echo htmlspecialchars($service['title']); ?></h3>
                    <p class="service-description">
                        <?php echo htmlspecialchars($service['description']); ?>
                    </p>
                </div>

                <!-- Service Features -->
                <div class="service-features">
                    <?php if ($index === 0): // ALIGN 360 Framework features ?>
                    <ul class="feature-list">
                        <li>Strategic planning & execution</li>
                        <li>Performance optimization</li>
                        <li>Growth acceleration</li>
                    </ul>
                    <?php elseif ($index === 1): // Non-Profit features ?>
                    <ul class="feature-list">
                        <li>Mission-driven strategy</li>
                        <li>Board governance</li>
                        <li>Impact measurement</li>
                    </ul>
                    <?php else: // Executive Coaching features ?>
                    <ul class="feature-list">
                        <li>Leadership development</li>
                        <li>Career advancement</li>
                        <li>Personal growth</li>
                    </ul>
                    <?php endif; ?>
                </div>

                <!-- Service Action -->
                <div class="service-action">
                    <a href="/contact.php" class="service-link">
                        <span>Explore this service</span>
                        <svg class="arrow-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.16666 10H15.8333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10 4.16667L15.8333 10L10 15.8333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Services CTA -->
        <div class="services-cta">
            <div class="services-cta-content">
                <h3 class="services-cta-title">Ready to transform your business?</h3>
                <p class="services-cta-description">
                    Let's discuss how our proven methodologies can drive your success.
                </p>
                <a href="/contact.php" class="button-primary services-cta-button">
                    Start your journey
                    <svg class="arrow-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.16666 10H15.8333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 4.16667L15.8333 10L10 15.8333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>