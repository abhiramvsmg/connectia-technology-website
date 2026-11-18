# Deployment notes

Branch: main. To see every change since the original backup, compare a959bb4 with main on GitHub.

## Before uploading
1. Take a backup of the current site on the server.
2. Publish to the TEST site (conn.vual.in) first. Publish to the live site only after HR approves.

## Do NOT upload
- phpinfo.php, test.php, index_old_backup.php (test and backup files)

## Do NOT overwrite on the server
- The admin configuration and database settings (the server has its own)
- Server-side data such as session and upload folders

## What changed
- index.php (homepage), about.php, privacy-policies.php
- The nine service pages (software-development, web-development, web-design, software-testing, mobile-application, cybersecurity, server-hosting, technical-support, data-protection)
- includes/navbar.php, includes/footer.php, partials/service-detail.php
- static/css/style.css, static/images/services/

## Pending
- Homepage video (waiting for the MP4 from HR)
