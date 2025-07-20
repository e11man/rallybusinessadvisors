# Complete Guide: Deploying PHP Sites to Vercel

This guide provides detailed instructions for deploying PHP websites to Vercel, based on the successful deployment of Rally Business Advisors. It covers all the critical configurations, file structures, and common pitfalls to avoid.

## Table of Contents

1. [Project Structure Requirements](#project-structure-requirements)
2. [Vercel Configuration](#vercel-configuration)
3. [PHP File Organization](#php-file-organization)
4. [Include Path Management](#include-path-management)
5. [Runtime Configuration](#runtime-configuration)
6. [Common Issues and Solutions](#common-issues-and-solutions)
7. [Deployment Process](#deployment-process)
8. [Best Practices](#best-practices)

## Project Structure Requirements

### Required Directory Structure

```
project-root/
├── api/                    # Serverless functions directory
│   ├── *.php              # API endpoints
│   └── pages/             # Page-based routing
│       ├── *.php          # Individual pages
│       └── content.php    # Shared content/config
├── components/            # Reusable PHP components
│   ├── header.php
│   ├── footer.php
│   ├── hero.php
│   └── *.php
├── css/                   # Static assets
│   └── style.css
├── js/                    # Static JavaScript
│   └── *.js
├── vercel.json           # Vercel configuration
├── composer.json         # PHP dependencies (optional)
└── .vercelignore         # Files to ignore during deployment
```

### Critical Points

- **`api/` directory**: All PHP files that need server-side execution MUST be in the `api/` directory
- **Static assets**: CSS, JS, images go in root-level directories
- **Components**: Shared PHP components can be outside `api/` but require absolute path includes

## Vercel Configuration

### vercel.json Configuration

```json
{
  "functions": {
    "api/*.php": {
      "runtime": "vercel-php@0.7.4"
    },
    "api/**/*.php": {
      "runtime": "vercel-php@0.7.4"
    }
  },
  "rewrites": [
    {
      "source": "/",
      "destination": "/api/pages/index.php"
    },
    {
      "source": "/about",
      "destination": "/api/pages/about.php"
    },
    {
      "source": "/services",
      "destination": "/api/pages/services.php"
    },
    {
      "source": "/contact",
      "destination": "/api/pages/contact.php"
    }
  ]
}
```

### Key Configuration Elements

1. **Runtime Specification**: Use `vercel-php@0.7.4` (latest stable version)
2. **Wildcard Patterns**: Use `api/*.php` and `api/**/*.php` for comprehensive coverage
3. **Rewrites**: Map clean URLs to PHP files in the `api/` directory
4. **No Framework Setting**: Avoid `"framework": null` unless specifically needed

## PHP File Organization

### API Directory Structure

```
api/
├── contact.php           # Contact form handler
├── health.php           # Health check endpoint
├── index.php            # API index (optional)
└── pages/               # Page routing
    ├── index.php        # Homepage
    ├── about.php        # About page
    ├── services.php     # Services page
    ├── contact.php      # Contact page
    └── content.php      # Shared content configuration
```

### Page File Template

```php
<?php
// Load shared content
$content = require __DIR__ . '/content.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($content['site_title']); ?></title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <!-- Header -->
    <?php include __DIR__ . '/../../components/header.php'; ?>
    
    <!-- Page Content -->
    <?php include __DIR__ . '/../../components/page-content.php'; ?>
    
    <!-- Footer -->
    <?php include __DIR__ . '/../../components/footer.php'; ?>
</body>
</html>
```

## Include Path Management

### Critical Rule: Use Absolute Paths

❌ **WRONG** (Relative paths - will fail):
```php
<?php include 'components/header.php'; ?>
<?php $content = require 'content.php'; ?>
```

✅ **CORRECT** (Absolute paths with __DIR__):
```php
<?php include __DIR__ . '/../../components/header.php'; ?>
<?php $content = require __DIR__ . '/content.php'; ?>
```

### Path Resolution Examples

From `api/pages/index.php`:
- To `components/header.php`: `__DIR__ . '/../../components/header.php'`
- To `api/pages/content.php`: `__DIR__ . '/content.php'`
- To root-level file: `__DIR__ . '/../../filename.php'`

### Why Absolute Paths Are Required

Vercel's serverless functions run in isolated environments where:
- Working directory is not guaranteed
- Relative paths may resolve incorrectly
- `__DIR__` provides reliable absolute path resolution

## Runtime Configuration

### Supported PHP Versions

- `vercel-php@0.7.4` - PHP 8.3.x (recommended)
- `vercel-php@0.6.0` - PHP 8.2.x
- `vercel-php@0.5.2` - PHP 8.1.x

### Runtime Features

- Full PHP standard library
- Common extensions (curl, json, mbstring, etc.)
- File system access within function scope
- Environment variables support

### Limitations

- No persistent storage between requests
- 50MB deployment size limit
- 10-second execution timeout
- No shell access or system commands

## Common Issues and Solutions

### Issue 1: "No such file or directory" Errors

**Problem**: PHP include/require statements failing

**Solution**: Use absolute paths with `__DIR__`
```php
// Change this:
include 'components/header.php';

// To this:
include __DIR__ . '/../../components/header.php';
```

### Issue 2: Node.js Runtime Detection

**Problem**: Vercel detects Node.js instead of PHP

**Solutions**:
1. Ensure `package.json` doesn't interfere (rename if necessary)
2. Use explicit runtime configuration in `vercel.json`
3. Remove `node_modules/` if present and not needed

### Issue 3: Files Downloading Instead of Executing

**Problem**: PHP files download as text instead of executing

**Solution**: Ensure files are in `api/` directory with proper `vercel.json` configuration

### Issue 4: CSS/JS Not Loading

**Problem**: Static assets return 404 errors

**Solution**: 
- Keep static files in root-level directories
- Use absolute paths in HTML: `/css/style.css` not `css/style.css`
- Ensure no conflicting rewrites in `vercel.json`

## Deployment Process

### Prerequisites

1. Install Vercel CLI: `npm i -g vercel`
2. Login to Vercel: `vercel login`
3. Link project: `vercel link`

### Deployment Steps

1. **Prepare Configuration**
   ```bash
   # Ensure vercel.json is properly configured
   # Verify all PHP files use absolute includes
   ```

2. **Test Locally** (Optional)
   ```bash
   # Install PHP locally for testing
   php -S localhost:8000 -t .
   ```

3. **Deploy to Preview**
   ```bash
   vercel
   ```

4. **Deploy to Production**
   ```bash
   vercel --prod
   ```

### Verification Checklist

- [ ] All pages load without errors
- [ ] PHP includes work correctly
- [ ] Static assets (CSS/JS) load properly
- [ ] Forms submit successfully
- [ ] No "file not found" errors in logs

## Best Practices

### File Organization

1. **Separate Concerns**: Keep API endpoints, pages, and components organized
2. **Consistent Naming**: Use clear, descriptive filenames
3. **Shared Content**: Use a central configuration file for site-wide content

### Code Structure

1. **Absolute Paths**: Always use `__DIR__` for includes
2. **Error Handling**: Implement proper error handling for includes
3. **Security**: Sanitize all user inputs and outputs

### Performance

1. **Minimize Includes**: Only include necessary files
2. **Optimize Assets**: Compress CSS/JS files
3. **Caching**: Use appropriate cache headers

### Security

1. **Input Validation**: Validate all form inputs
2. **Output Escaping**: Use `htmlspecialchars()` for output
3. **Environment Variables**: Store sensitive data in Vercel environment variables

### Example Environment Variables

```bash
# In Vercel dashboard or via CLI
vercel env add SMTP_HOST
vercel env add SMTP_USER
vercel env add SMTP_PASS
```

Access in PHP:
```php
$smtpHost = $_ENV['SMTP_HOST'] ?? 'localhost';
```

## Troubleshooting

### Debug Mode

Enable error reporting in development:
```php
<?php
if ($_ENV['VERCEL_ENV'] !== 'production') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}
?>
```

### Logging

Use Vercel's function logs:
```bash
vercel logs [deployment-url]
```

### Common Error Messages

- **"Function not found"**: Check `vercel.json` function configuration
- **"Module not found"**: Verify include paths use `__DIR__`
- **"Runtime not supported"**: Update to latest `vercel-php` version

## Conclusion

Successful PHP deployment to Vercel requires:

1. Proper file organization with `api/` directory structure
2. Correct `vercel.json` configuration with explicit PHP runtime
3. Absolute path includes using `__DIR__`
4. Clean URL routing through rewrites
5. Proper static asset organization

Following this guide ensures a smooth deployment process and a fully functional PHP website on Vercel's serverless platform.

---

*This guide is based on the successful deployment of Rally Business Advisors and covers all discovered requirements and solutions.*