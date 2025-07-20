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
            <div class="section-tag">All in one services</div>
            <h2 class="section-title">Innovative solutions for real world challenges</h2>
            <p class="section-description">
                We deliver sharp, results-driven consulting across the core areas of 
                business success. Whether you're scaling, restructuring, or innovating — 
                we're here to guide your next bold move.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="services-grid">
            <!-- Service 1: ALIGN 360 Framework -->
            <div class="service-card">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 6L6 14L24 22L42 14L24 6Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6 34L24 42L42 34" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6 24L24 32L42 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="service-title">Business strategy</h3>
                <p class="service-description">
                    Clear, data-driven strategies to drive growth and competitive edge.
                </p>
                <div class="service-image">
                    <div class="placeholder-image"></div>
                </div>
                <a href="/contact.php" class="service-button">
                    Learn more
                    <svg class="arrow-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 3L11 8L6 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

            <!-- Service 2: Operations Optimization -->
            <div class="service-card">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 12C30.627 12 36 17.373 36 24C36 30.627 30.627 36 24 36C17.373 36 12 30.627 12 24C12 17.373 17.373 12 24 12Z" stroke="currentColor" stroke-width="2"/>
                        <path d="M24 18L24 24L30 30" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="service-title">Operations optimization</h3>
                <p class="service-description">
                    Streamlining processes to maximize efficiency and output.
                </p>
                <div class="service-image">
                    <div class="placeholder-image"></div>
                </div>
                <a href="/contact.php" class="service-button">
                    Learn more
                    <svg class="arrow-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 3L11 8L6 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

            <!-- Service 3: Organizational Development -->
            <div class="service-card">
                <div class="service-icon">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 20C19.314 20 22 17.314 22 14C22 10.686 19.314 8 16 8C12.686 8 10 10.686 10 14C10 17.314 12.686 20 16 20Z" stroke="currentColor" stroke-width="2"/>
                        <path d="M32 20C35.314 20 38 17.314 38 14C38 10.686 35.314 8 32 8C28.686 8 26 10.686 26 14C26 17.314 28.686 20 32 20Z" stroke="currentColor" stroke-width="2"/>
                        <path d="M24 40C27.314 40 30 37.314 30 34C30 30.686 27.314 28 24 28C20.686 28 18 30.686 18 34C18 37.314 20.686 40 24 40Z" stroke="currentColor" stroke-width="2"/>
                        <path d="M22 20L26 28" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M22 28L26 20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="service-title">Organizational development</h3>
                <p class="service-description">
                    Shaping agile teams and future-ready leadership structures.
                </p>
                <div class="service-image">
                    <div class="placeholder-image"></div>
                </div>
                <a href="/contact.php" class="service-button">
                    Learn more
                    <svg class="arrow-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 3L11 8L6 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>