<?php
// Load content if not already loaded
if (!isset($content)) {
    $content = require __DIR__ . '/../content.php';
}
?>
<header class="header">
    <div class="container">
        <div class="nav-wrapper">
            <!-- Logo -->
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

            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" aria-label="Toggle mobile menu" aria-expanded="false">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>

            <!-- Navigation Links -->
            <nav class="nav" id="mobile-nav">
                <ul class="nav-list">
                    <li><a href="/" class="nav-link"><?php echo htmlspecialchars($content['navigation']['home']); ?></a></li>
                    <li><a href="/services.php" class="nav-link"><?php echo htmlspecialchars($content['navigation']['services']); ?></a></li>
                    <li><a href="/about.php" class="nav-link"><?php echo htmlspecialchars($content['navigation']['about']); ?></a></li>
                    <li><a href="/contact.php" class="nav-link"><?php echo htmlspecialchars($content['navigation']['contact']); ?></a></li>
                </ul>

                <!-- Mobile CTA Buttons -->
                <div class="nav-actions-mobile">
                    <a href="/contact.php" class="button-secondary"><?php echo htmlspecialchars($content['navigation']['contact']); ?></a>
                    <a href="/contact.php" class="button-primary"><?php echo htmlspecialchars($content['hero']['cta_button']); ?></a>
                </div>
            </nav>

            <!-- Desktop CTA Buttons -->
            <div class="nav-actions">
                <a href="/contact.php" class="button-secondary"><?php echo htmlspecialchars($content['navigation']['contact']); ?></a>
                <a href="/contact.php" class="button-primary"><?php echo htmlspecialchars($content['hero']['cta_button']); ?></a>
            </div>
        </div>
    </div>
</header> 