# Rally Business Advisors - Vercel Deployment

This site is ready for deployment on Vercel with full PHP support.

## 🚀 Quick Deploy

1. **Install Vercel CLI** (if not already installed):
   ```bash
   npm i -g vercel
   ```

2. **Deploy to Vercel**:
   ```bash
   vercel --prod
   ```

## 📁 Site Structure

- `index.php` - Homepage with hero section
- `about.php` - About page
- `services.php` - Services page  
- `contact.php` - Contact page
- `content.php` - Centralized content management
- `components/` - Reusable PHP components
- `css/style.css` - Compiled styles
- `vercel.json` - Vercel configuration

## ⚙️ Configuration

The site is configured with:
- **PHP Runtime**: `vercel-php@0.6.0`
- **Clean URLs**: `/about` → `/about.php`
- **Security Headers**: XSS, CSRF, and content-type protection
- **Cache Optimization**: Long-term caching for static assets
- **Mobile-First**: Responsive design optimized for all devices

## 🔗 URLs After Deployment

- Homepage: `https://your-site.vercel.app/`
- About: `https://your-site.vercel.app/about`
- Services: `https://your-site.vercel.app/services`
- Contact: `https://your-site.vercel.app/contact`

## ✅ Ready for Production

✓ PHP 8.1+ compatible  
✓ Security headers configured  
✓ SEO optimized with proper meta tags  
✓ Mobile-responsive design  
✓ Clean URL routing  
✓ Static asset optimization  
✓ Cross-browser compatible