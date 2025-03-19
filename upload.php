<?php
/**
 * Deploy Script for UAV Pilot Study
 * 
 * This script helps with uploading the compiled files to your server.
 * It assumes you've already uploaded all files via FTP or other means.
 * This script helps verify the deployment.
 */

// Display basic server information
echo "<h1>UAV Pilot Study Deployment Information</h1>";
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
echo "<p>Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";

// Check for required files
$requiredFiles = [
    'index.html',
    '.htaccess',
    'asset-manifest.json',
    'manifest.json',
    'robots.txt',
    'static/css/main.72c86fee.css',
    'static/js/main.431a87c6.js'
];

echo "<h2>Required Files Check:</h2>";
echo "<ul>";
foreach ($requiredFiles as $file) {
    if (file_exists($file)) {
        echo "<li>✅ $file - Found</li>";
    } else {
        echo "<li>❌ $file - <span style='color:red'>Missing</span></li>";
    }
}
echo "</ul>";

// Display deployment timestamp
echo "<p>Deployment check performed: " . date('Y-m-d H:i:s') . "</p>";

// Add site URL
echo "<p><a href='https://uav-pilot-study.com/'>View the UAV Pilot Study Site</a></p>";
?>