# Laravel Deployment Script for Heroku (PowerShell)
# Run this script after setting up Heroku CLI

Write-Host "Starting Laravel deployment to Heroku..." -ForegroundColor Green

# Check if Heroku CLI is installed
try {
    heroku --version | Out-Null
    Write-Host "✅ Heroku CLI is installed" -ForegroundColor Green
} catch {
    Write-Host "❌ Heroku CLI is not installed. Please install it from https://devcenter.heroku.com/articles/heroku-cli" -ForegroundColor Red
    exit 1
}

# Login to Heroku (if not already logged in)
Write-Host "Checking Heroku authentication..." -ForegroundColor Yellow
try {
    heroku auth:whoami | Out-Null
    Write-Host "✅ Already logged in to Heroku" -ForegroundColor Green
} catch {
    Write-Host "Please login to Heroku..." -ForegroundColor Yellow
    heroku login
}

# Create Heroku app
Write-Host "Creating Heroku app..." -ForegroundColor Yellow
$APP_NAME = Read-Host "Enter your app name (leave empty for auto-generated)"
if ([string]::IsNullOrWhiteSpace($APP_NAME)) {
    heroku create
} else {
    heroku create $APP_NAME
}

# Get the app key
$APP_KEY = php artisan --no-ansi key:generate --show

# Set environment variables
Write-Host "Setting environment variables..." -ForegroundColor Yellow
heroku config:set APP_ENV=production
heroku config:set APP_DEBUG=false
heroku config:set "APP_KEY=$APP_KEY"

# Deploy to Heroku
Write-Host "Deploying to Heroku..." -ForegroundColor Yellow
git push heroku main

# Open the app
Write-Host "Opening your deployed app..." -ForegroundColor Yellow
heroku open

Write-Host "✅ Deployment complete!" -ForegroundColor Green
Write-Host "Your Laravel portfolio is now live!" -ForegroundColor Green
