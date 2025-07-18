<?php
// Load content if not already loaded
if (!isset($content)) {
    $content = require __DIR__ . '/../content.php';
}
?>
<section class="stats" id="stats">
    <div class="stats-background">
        <div class="stats-overlay"></div>
    </div>
    
    <div class="container">
        <div class="stats-intro">
            <h2 class="stats-title">Strategic solutions designed to drive clarity, performance, and growth.</h2>
        </div>
        
        <div class="stats-grid">
            <!-- Stat 1 -->
            <div class="stat-item">
                <div class="stat-number">95%</div>
                <div class="stat-label">Client Satisfaction Rate</div>
                <p class="stat-description">
                    Long-term relationships built on trust, clarity, and results.
                </p>
            </div>
            
            <!-- Stat 2 -->
            <div class="stat-item">
                <div class="stat-number">15+</div>
                <div class="stat-label">Years of Combined Experience</div>
                <p class="stat-description">
                    A team of senior consultants with deep industry insight.
                </p>
            </div>
            
            <!-- Stat 3 -->
            <div class="stat-item">
                <div class="stat-number">250+</div>
                <div class="stat-label">Projects Completed</div>
                <p class="stat-description">
                    Successfully executed initiatives across strategy, operations, and transformation.
                </p>
            </div>
            
            <!-- Stat 4 -->
            <div class="stat-item">
                <div class="stat-number">40%</div>
                <div class="stat-label">Average Growth Achieved</div>
                <p class="stat-description">
                    Clients report measurable improvement in performance and ROI.
                </p>
            </div>
        </div>
        
        <div class="stats-cta">
            <a href="#contact" class="button-primary stats-button">
                Let's build your next chapter
                <svg class="arrow-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.16666 10H15.8333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10 4.16667L15.8333 10L10 15.8333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</section>