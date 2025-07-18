<?php
// Load content if not already loaded
if (!isset($content)) {
    $content = require '../content.php';
}
?>
<section class="hero" id="home">
    <div class="hero-background">
        <div class="hero-overlay"></div>
    </div>
    
    <div class="container">
        <div class="hero-content">
            <!-- Tagline -->
            <div class="hero-tagline">
                <span class="tag-badge"><?php echo htmlspecialchars($content['hero']['tagline']); ?></span>
                <span class="tag-subtitle"><?php echo htmlspecialchars($content['hero']['subtitle']); ?></span>
            </div>

            <!-- Main Title -->
            <h1 class="hero-title">
                <?php 
                $title_lines = explode("\n", $content['hero']['title']);
                foreach ($title_lines as $line) {
                    echo '<span>' . htmlspecialchars(trim($line)) . '</span>';
                }
                ?>
            </h1>

            <!-- Description -->
            <p class="hero-description">
                <?php echo htmlspecialchars($content['hero']['description']); ?>
            </p>

            <!-- CTA Button -->
            <a href="#contact" class="button-primary hero-cta">
                <?php echo htmlspecialchars($content['hero']['cta_button']); ?>
                <svg class="arrow-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.16666 10H15.8333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10 4.16667L15.8333 10L10 15.8333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</section> 