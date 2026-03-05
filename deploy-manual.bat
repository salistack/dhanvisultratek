@echo off
echo 🚀 Manual deployment to cPanel...

REM FTP credentials
set FTP_HOST=dhanvisultratek.com
set FTP_USER=umairsalih2001@dhanvisultratek.com  
set FTP_PASS=password@DP7

echo 📁 Uploading index.php...
curl -T index.php ftp://%FTP_HOST%/public_html/ -u %FTP_USER%:%FTP_PASS%

echo 📁 Uploading about.php...
curl -T about.php ftp://%FTP_HOST%/public_html/ -u %FTP_USER%:%FTP_PASS%

echo 📁 Uploading contact.php...
curl -T contact.php ftp://%FTP_HOST%/public_html/ -u %FTP_USER%:%FTP_PASS%

echo 📁 Uploading services.php...
curl -T services.php ftp://%FTP_HOST%/public_html/ -u %FTP_USER%:%FTP_PASS%

echo 📁 Uploading main CSS...
curl -T css/style.css ftp://%FTP_HOST%/public_html/css/ -u %FTP_USER%:%FTP_PASS% --ftp-create-dirs

echo 📁 Uploading main JS...
curl -T js/init.js ftp://%FTP_HOST%/public_html/js/ -u %FTP_USER%:%FTP_PASS% --ftp-create-dirs

echo ✅ Core files uploaded! 
echo 🌐 Check your site: https://dhanvisultratek.com
pause