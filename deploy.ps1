# GitHub Pages Deployment Script for Windows
# This script helps automate the deployment process for GitHub Pages

# Ensure we're in the repository root
$scriptPath = Split-Path -Parent $MyInvocation.MyCommand.Path
Set-Location $scriptPath

# Make sure our repository is up to date
Write-Host "Pulling latest changes..." -ForegroundColor Green
git pull

# Add changes to git
Write-Host "Adding all changes to git..." -ForegroundColor Green
git add .

# Commit changes
Write-Host "Committing changes..." -ForegroundColor Green
$commitMessage = Read-Host "Enter commit message"
git commit -m "$commitMessage"

# Push changes to GitHub
Write-Host "Pushing changes to GitHub..." -ForegroundColor Green
git push origin main

# Deployment complete
Write-Host "Deployment complete!" -ForegroundColor Green
Write-Host "Your site should now be updated at: https://myrick24.me/" -ForegroundColor Cyan
Write-Host "It may take a few minutes for changes to appear." -ForegroundColor Cyan
Write-Host "Press any key to exit..."
$null = $Host.UI.RawUI.ReadKey("NoEcho,IncludeKeyDown")
