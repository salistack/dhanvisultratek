#!/bin/bash

# Manual deployment script for dhanvisultratek.com
# Run this if GitHub Actions fails

echo "🚀 Manual deployment to cPanel..."

# FTP credentials
FTP_HOST="dhanvisultratek.com"
FTP_USER="umairsalih2001@dhanvisultratek.com"
FTP_PASS="password@DP7"

# Simple curl-based upload
echo "📁 Uploading index.php..."
curl -T index.php ftp://$FTP_HOST/public_html/ -u $FTP_USER:$FTP_PASS

echo "📁 Uploading CSS files..."
find css -name "*.css" -exec curl -T {} ftp://$FTP_HOST/public_html/css/ -u $FTP_USER:$FTP_PASS --ftp-create-dirs \;

echo "📁 Uploading JS files..."
find js -name "*.js" -exec curl -T {} ftp://$FTP_HOST/public_html/js/ -u $FTP_USER:$FTP_PASS --ftp-create-dirs \;

echo "📁 Uploading PHP files..."
find . -maxdepth 1 -name "*.php" -exec curl -T {} ftp://$FTP_HOST/public_html/ -u $FTP_USER:$FTP_PASS \;

echo "✅ Manual deployment complete!"
echo "🌐 Check your site: https://dhanvisultratek.com"