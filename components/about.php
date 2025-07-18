<?php
// Load content if not already loaded
if (!isset($content)) {
    $content = require __DIR__ . '/../content.php';
}
?>
<section class="about" id="about">
    <div class="container">
        <!-- About Header -->
        <div class="about-header">
            <div class="section-tag">About us</div>
            <h2 class="section-title">Strategic minds. Real-world impact.</h2>
        </div>

        <div class="about-content">
            <!-- Left Column: Description -->
            <div class="about-description">
                <p class="about-text">
                    We're a corporate consulting firm focused on helping businesses grow, 
                    streamline, and adapt. With deep industry experience and a sharp, 
                    practical approach, we guide companies through strategy, operations, and 
                    transformation.
                </p>
                
                <!-- Profile Image Placeholder -->
                <div class="about-image">
                    <div class="placeholder-image about-placeholder">
                        <div class="image-overlay">
                            <blockquote class="about-quote">
                                "Great businesses aren't built on ideas alone — they're built on execution, 
                                discipline, and vision. That's where we come in."
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Features -->
            <div class="about-features">
                <!-- Feature 1: Strategic Precision -->
                <div class="feature-item">
                    <div class="feature-header">
                        <h3 class="feature-title">Strategic Precision</h3>
                        <button class="feature-toggle" aria-expanded="true">
                            <svg class="toggle-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                    <div class="feature-content active">
                        <p class="feature-description">
                            Our work goes beyond theory — we translate your business goals into 
                            focused, achievable action plans. With us, strategy is not a document; 
                            it's a roadmap to measurable impact.
                        </p>
                        <ul class="feature-list">
                            <li>Every solution is grounded in research, analytics, and proven frameworks.</li>
                            <li>We align leadership around priorities that drive performance.</li>
                            <li>We focus on strategies that are both visionary and operationally sound.</li>
                        </ul>
                    </div>
                </div>

                <!-- Feature 2: Senior-Led Expertise -->
                <div class="feature-item">
                    <div class="feature-header">
                        <h3 class="feature-title">Senior-Led Expertise</h3>
                        <button class="feature-toggle" aria-expanded="false">
                            <svg class="toggle-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                    <div class="feature-content">
                        <p class="feature-description">
                            Our consultants bring experience from diverse industries and complex 
                            environments. We've led high-impact projects across growth, transformation, 
                            and performance — from startups to global enterprises.
                        </p>
                    </div>
                </div>

                <!-- Feature 3: Tailored Solutions -->
                <div class="feature-item">
                    <div class="feature-header">
                        <h3 class="feature-title">Tailored Solutions</h3>
                        <button class="feature-toggle" aria-expanded="false">
                            <svg class="toggle-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                    <div class="feature-content">
                        <p class="feature-description">
                            We don't believe in one-size-fits-all. Every engagement is customized to your context 
                            — co-created with your team to ensure buy-in, adoption, and results that last.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>