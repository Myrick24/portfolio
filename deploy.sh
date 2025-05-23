# GitHub Pages Deployment Script
# This script helps automate the deployment process for GitHub Pages

# Ensure we're in the repository root
cd "$(dirname "$0")"

# Make sure our repository is up to date
echo "Pulling latest changes..."
git pull

# Add changes to git
echo "Adding all changes to git..."
git add .

# Commit changes
echo "Committing changes..."
read -p "Enter commit message: " commit_message
git commit -m "$commit_message"

# Push changes to GitHub
echo "Pushing changes to GitHub..."
git push origin main

# Deployment complete
echo "Deployment complete!"
echo "Your site should now be updated at: https://myrick24.me/"
echo "It may take a few minutes for changes to appear."
