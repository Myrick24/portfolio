#!/bin/bash

# Laravel Deployment Script for Heroku
# Run this script after setting up Heroku CLI

echo "Starting Laravel deployment to Heroku..."

# Check if Heroku CLI is installed
if ! command -v heroku &> /dev/null; then
    echo "❌ Heroku CLI is not installed. Please install it from https://devcenter.heroku.com/articles/heroku-cli"
    exit 1
fi

# Login to Heroku (if not already logged in)
echo "Please login to Heroku if prompted..."
heroku auth:whoami || heroku login

# Create Heroku app (replace 'your-portfolio-name' with your desired name)
echo "Creating Heroku app..."
read -p "Enter your app name (leave empty for auto-generated): " APP_NAME
if [ -z "$APP_NAME" ]; then
    heroku create
else
    heroku create $APP_NAME
fi

# Set environment variables
echo "Setting environment variables..."
heroku config:set APP_ENV=production
heroku config:set APP_DEBUG=false
heroku config:set APP_KEY=$(php artisan --no-ansi key:generate --show)

# Deploy to Heroku
echo "Deploying to Heroku..."
git push heroku main

# Open the app
echo "Opening your deployed app..."
heroku open

echo "✅ Deployment complete!"
echo "Your Laravel portfolio is now live!"
