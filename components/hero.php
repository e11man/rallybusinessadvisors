<?php
// Load content if not already loaded
if (!isset($content)) {
    $content = require __DIR__ . '/../content.php';
}
?>
<section class="hero" id="home">
    <div class="hero-background">
        <div class="hero-overlay"></div>
    </div>
    
    <div class="container hero-container">
        <div class="hero-content">
            <!-- Modern Credibility Badge -->
            <div class="hero-badge">
                <span class="badge-text"><?php echo htmlspecialchars($content['hero']['tagline']); ?></span>
            </div>

            <!-- Bold Main Title -->
            <h1 class="hero-title">
                <?php 
                $title_lines = explode(' in ', $content['hero']['title']);
                if (count($title_lines) > 1) {
                    echo '<span class="title-line">' . htmlspecialchars(trim($title_lines[0])) . ' in</span>';
                    echo '<span class="title-line">' . htmlspecialchars(trim($title_lines[1])) . '</span>';
                } else {
                    $title_lines = explode(' ', $content['hero']['title']);
                    $chunks = array_chunk($title_lines, ceil(count($title_lines) / 2));
                    foreach ($chunks as $chunk) {
                        echo '<span class="title-line">' . htmlspecialchars(implode(' ', $chunk)) . '</span>';
                    }
                }
                ?>
            </h1>

            <!-- Compelling Subtitle -->
            <p class="hero-subtitle">
                <?php echo htmlspecialchars($content['hero']['subtitle']); ?>
            </p>

            <!-- Clear Value Proposition -->
            <p class="hero-description">
                <?php echo htmlspecialchars($content['hero']['description']); ?>
            </p>

            <!-- Prominent CTA Button -->
            <a href="/contact.php" class="button-primary hero-cta" role="button">
                <?php echo htmlspecialchars($content['hero']['cta_button']); ?>
                <svg class="arrow-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M4.16666 10H15.8333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10 4.16667L15.8333 10L10 15.8333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</section>