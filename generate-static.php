<?php
/**
 * This script generates a static HTML version of your Laravel home page
 * Run this script locally before pushing to GitHub Pages
 */

// Set the working directory
chdir(__DIR__);

// Bootstrap Laravel
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// Create a request to the home route
$request = Illuminate\Http\Request::create('/', 'GET');
$response = $kernel->handle($request);

// Get the rendered content
$content = $response->getContent();

// Convert Laravel-specific asset and route paths to static paths
$content = preg_replace('/\{\{\s*asset\([\'"](.+?)[\'"]\)\s*\}\}/', '$1', $content);
$content = preg_replace('/\{\{\s*route\([\'"](.+?)[\'"]\)\s*\}\}/', '#$1', $content);

// Fix references to CSS and JS files
$content = str_replace('css/style.css', 'css/style.css', $content);
$content = str_replace('css/custom.css', 'css/custom.css', $content);
$content = str_replace('js/index.js', 'js/index.js', $content);

// Create the static HTML file in the public directory
file_put_contents(__DIR__ . '/public/index.html', $content);

echo "Static HTML file generated successfully at public/index.html\n";

// Save the static HTML to public/index.html
file_put_contents(__DIR__ . '/public/index.html', $content);

echo "Static HTML page generated successfully!\n";
