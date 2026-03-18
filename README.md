# Dhanvis Ultratek Website

Website for Dhanvis Ultratek - Non-Destructive Testing Services

## Deployment

This repository supports two deployment targets:

1. GitHub Pages (recommended)
2. cPanel FTP deployment

### GitHub Pages (main branch)

When you push to `main`, GitHub Actions renders all top-level PHP pages into static HTML and deploys them to GitHub Pages.

- Workflow: `.github/workflows/deploy-github-pages.yml`
- Output folder: `_site/`
- Includes are resolved during build by PHP CLI, then internal links are rewritten from `.php` to `.html`

After first successful run, enable Pages in repository settings:

- Settings -> Pages -> Build and deployment -> Source: `GitHub Actions`

Your site URL will be:

- `https://<github-username>.github.io/dhanvisultratek/` (project pages)

> Note: GitHub Pages is static hosting. `modal/contact.php` (server-side mail handler) will not execute on GitHub Pages.

### cPanel FTP deployment (salistack branch)

This website deploys to cPanel hosting when you push to:
- `salistack` branch

### Required GitHub Secrets:
- `FTP_USERNAME`: umairsalih2001@dhanvisultratek.com
- `FTP_PASSWORD`: your cPanel FTP password

### Manual Deployment
If automatic deployment fails, you can trigger the workflow manually from the GitHub Actions tab.

## Website Structure:
- `index.php` - Homepage
- `about.php` - About page
- `services.php` - Services page
- `contact.php` - Contact page
- `css/` - Stylesheets
- `js/` - JavaScript files
- `img/` - Images
- `includes/` - PHP includes

## Domain:
https://dhanvisultratek.com