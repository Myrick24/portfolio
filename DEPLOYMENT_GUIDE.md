# Laravel Portfolio Deployment Guide

Your Laravel portfolio application is ready for deployment! Here are several options to get your site online:

## Option 1: Heroku (Recommended for beginners)

### Prerequisites
1. Install Heroku CLI from: https://devcenter.heroku.com/articles/heroku-cli
2. Create a free Heroku account at: https://signup.heroku.com/

### Deployment Steps
1. Open PowerShell and navigate to your project:
   ```powershell
   cd d:\laravel-portfolio
   ```

2. Login to Heroku:
   ```powershell
   heroku login
   ```

3. Create a new Heroku app:
   ```powershell
   heroku create your-portfolio-name
   ```
   (Replace `your-portfolio-name` with your desired app name)

4. Set environment variables:
   ```powershell
   heroku config:set APP_ENV=production
   heroku config:set APP_DEBUG=false
   heroku config:set APP_KEY=base64:CQ6dVZHsK2rHmEuzrLvSwFAWXX5qJDfJuGAtEjNpMG0=
   ```

5. Deploy your application:
   ```powershell
   git push heroku main
   ```

6. Your app will be live at: `https://your-portfolio-name.herokuapp.com`

## Option 2: Railway (Modern alternative to Heroku)

1. Visit https://railway.app and sign up
2. Connect your GitHub repository
3. Railway will automatically detect your Laravel app
4. Set environment variables in Railway dashboard:
   - `APP_ENV=production`
   - `APP_DEBUG=false`
   - `APP_KEY=base64:CQ6dVZHsK2rHmEuzrLvSwFAWXX5qJDfJuGAtEjNpMG0=`
5. Deploy with one click!

## Option 3: Vercel (with serverless approach)

1. Install Vercel CLI:
   ```powershell
   npm i -g vercel
   ```
2. Login and deploy:
   ```powershell
   vercel login
   vercel --prod
   ```

## Option 4: DigitalOcean App Platform

1. Visit https://cloud.digitalocean.com/apps
2. Create new app from GitHub repository
3. Choose Laravel template
4. Set environment variables
5. Deploy!

## Option 5: Traditional Web Hosting

Upload your files to any PHP hosting provider that supports:
- PHP 8.2+
- Composer
- SQLite or MySQL database

### Files to upload:
- All files except `.env` (create new one on server)
- Point domain to `public/` folder
- Set proper file permissions

## Quick Deploy with Railway (Easiest Option)

Since Railway is the easiest option without CLI installation:

1. Push your code to GitHub:
   ```powershell
   git add .
   git commit -m "Ready for deployment"
   git push origin main
   ```

2. Go to https://railway.app
3. Sign up with GitHub
4. Click "Deploy from GitHub repo"
5. Select your laravel-portfolio repository
6. Railway will auto-detect Laravel and deploy!

## Environment Variables for Production

Make sure to set these in your hosting platform:
- `APP_ENV=production`
- `APP_DEBUG=false`
- `APP_KEY=base64:CQ6dVZHsK2rHmEuzrLvSwFAWXX5qJDfJuGAtEjNpMG0=`
- `APP_URL=https://your-domain.com`

## Post-Deployment Checklist

- [ ] Test all pages work correctly
- [ ] Check contact form functionality
- [ ] Verify images and assets load properly
- [ ] Test responsive design on mobile
- [ ] Set up custom domain (optional)

Your Laravel portfolio is ready to go live! 🚀
