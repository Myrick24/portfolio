# GitHub Pages Deployment Guide

This guide explains how to deploy this Laravel portfolio to GitHub Pages with a custom domain.

## Prerequisites
- GitHub account
- Custom domain (myrk24.me)
- Domain registrar access

## Deployment Steps

### 1. GitHub Repository
- Ensure your Laravel project is in a GitHub repository
- The repository should be named in the format: username.github.io (for user pages)
- Or any name for project pages

### 2. Special Files for GitHub Pages
- `.nojekyll` file in the repository root to disable Jekyll processing
- `index.html` in the repository root that redirects to your Laravel public directory

### 3. DNS Configuration
Configure your domain's DNS settings at your registrar:

#### A Records
Point your root domain to GitHub Pages IP addresses:
- 185.199.108.153
- 185.199.109.153
- 185.199.110.153
- 185.199.111.153

#### CNAME Record
- Name: www
- Value: yourusername.github.io (replace with your actual GitHub username)

### 3. GitHub Pages Configuration
- Go to your GitHub repository
- Navigate to Settings > Pages
- Under "Source", select the branch to deploy (e.g., gh-pages or main)
- Enter your custom domain in the "Custom domain" field
- Check "Enforce HTTPS" for secure connections

### 4. Verify Deployment
- Wait for DNS propagation (can take up to 48 hours)
- Visit your domain to verify the site is live
- Check for HTTPS lock icon in the browser

### 5. Troubleshooting
- If the site shows README.md instead of your homepage:
  - Make sure you have a `.nojekyll` file in the repository root
  - Create an `index.html` file in the repository root that redirects to your public folder
  - Check that the GitHub workflow is deploying the entire repository structure, not just the public directory
- If the site shows a 404, check your GitHub Pages source settings
- If styles are broken, check asset paths (they should be relative)
- For DNS issues, use tools like dig or nslookup to verify DNS propagation

### 6. Maintenance
- Push changes to your repository to update the live site
- GitHub Actions will automatically build and deploy changes

## Additional Resources
- [GitHub Pages Documentation](https://docs.github.com/en/pages)
- [Laravel on GitHub Pages](https://laraveldaily.com/post/how-to-deploy-laravel-project-to-github-pages)
- [Custom Domain Configuration](https://docs.github.com/en/pages/configuring-a-custom-domain-for-your-github-pages-site)
