# Rally Business Advisors Website

A modern, professional website for Rally Business Advisors built with PHP, HTML, and CSS following best practices for modularity, security, and performance.

## Features

- **Modern Design**: Clean, professional dark theme with green accents
- **Responsive Layout**: Mobile-first design that works on all devices
- **Modular Architecture**: Reusable components and centralized content management
- **Security First**: XSS protection and secure coding practices
- **Performance Optimized**: Fast loading with optimized assets

## Tech Stack

- **PHP 8.1+**: Server-side logic and dynamic content
- **HTML5**: Semantic markup structure
- **CSS3**: Modern styling with Flexbox and Grid
- **Vanilla JavaScript**: Lightweight interactivity
- **Inter Font**: Clean, professional typography

## Project Structure

```
rallybusinessadvisors/
├── components/          # Reusable PHP components
│   ├── header.php      # Navigation and header
│   └── hero.php        # Hero section
├── css/                # Stylesheets
│   └── style.css       # Main stylesheet
├── content.php         # Centralized content management
├── index.php           # Main homepage
└── README.md           # Project documentation
```

## Setup

1. **Server Requirements**: PHP 8.1 or higher
2. **Web Server**: Apache, Nginx, or PHP built-in server
3. **File Permissions**: Ensure web server can read files

### Local Development

```bash
# Using PHP built-in server
php -S localhost:8000

# Or using Apache/Nginx
# Point your web server to the project directory
```

## Content Management

All text content is managed in `content.php`. To update content:

1. Edit the appropriate section in `content.php`
2. Content changes will automatically appear on the website
3. No need to modify HTML files for content updates

## Design System

- **Colors**: Professional dark theme with green accents
- **Typography**: Inter font family for clean readability
- **Components**: Reusable button styles and layout components
- **Animations**: Subtle hover effects and smooth transitions

## Security Features

- XSS protection with `htmlspecialchars()`
- Secure content loading
- Input validation ready for forms
- Proper file permissions

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## License

©2024 by Rally Business Advisors, LLC