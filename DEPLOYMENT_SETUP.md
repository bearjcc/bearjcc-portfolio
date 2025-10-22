# GitHub Actions Deployment to Hostinger

## Overview

This setup uses GitHub Actions to build your Laravel app and deploy it to Hostinger via SSH/rsync. This gives you:
- ✅ **Automated builds** (composer, npm, artisan)
- ✅ **Private repository** support
- ✅ **Environment variables** managed on server
- ✅ **Zero manual steps** after initial setup

## Prerequisites

1. **Hostinger SSH access** (you already have this)
2. **GitHub repository** (you already have this)
3. **Server .env file** (create manually on Hostinger)

## Step 1: Create .env File on Hostinger

**Via Hostinger hPanel File Manager:**

1. Navigate to **Files** → **File Manager
2. Go to your domain folder (usually `/public_html` or `/public_html/bearjcc.com`)
3. Create `.env` file with these settings:

```env
APP_NAME="BearJCC Portfolio"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://bearjcc.com
APP_KEY=base64:YOUR_APP_KEY_HERE

# Database (get from Hostinger → Databases → MySQL Databases)
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

# Mail (use Hostinger's email)
MAIL_MAILER=smtp
MAIL_HOST=smtp.hostinger.com
MAIL_PORT=587
MAIL_USERNAME=contact@bearjcc.com
MAIL_PASSWORD=your_email_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=contact@bearjcc.com
MAIL_FROM_NAME="BearJCC Portfolio"

# Session/Cache
SESSION_DRIVER=file
CACHE_DRIVER=file
QUEUE_CONNECTION=sync

# Security
LOG_CHANNEL=stack
LOG_LEVEL=error
```

**Generate APP_KEY:**
- SSH into Hostinger: `ssh yourusername@ssh.hostinger.com -p 65002`
- Navigate to your domain folder
- Run: `php artisan key:generate`
- Copy the generated key to your `.env` file

## Step 2: Get Hostinger SSH Details

**From Hostinger hPanel:**
1. Go to **Advanced** → **SSH Access**
2. Note these details:
   - **Host**: `ssh.hostinger.com` (or similar)
   - **Port**: `65002` (usually)
   - **Username**: Your hosting username
   - **SSH Key**: The one you already set up

**Find your deploy path:**
- Usually `/home/yourusername/public_html` or `/home/yourusername/domains/bearjcc.com/public_html`
- Check in **Files** → **File Manager** to confirm the exact path

## Step 3: Set Up GitHub Secrets

**In your GitHub repository:**
1. Go to **Settings** → **Secrets and variables** → **Actions**
2. Click **New repository secret**
3. Add these secrets:

### Required Secrets:

**`HOST`**
- Value: `ssh.hostinger.com` (or your SSH host)

**`SSH_USER`**
- Value: Your Hostinger username (e.g., `u748959930`)

**`SSH_KEY`**
- Value: Your **private** SSH key (the one that matches the public key you added to Hostinger)
- Get this from: `~/.ssh/id_rsa` or `~/.ssh/id_ed25519` on your local machine
- Copy the entire key including `-----BEGIN` and `-----END` lines

**`DEPLOY_PATH`**
- Value: `/home/yourusername/public_html` (or your exact deploy path)

## Step 4: Test the Deployment

1. **Push a small change** to your `master` branch
2. **Check GitHub Actions** tab in your repository
3. **Watch the deployment** run automatically
4. **Visit your site** to verify it's working

## Step 5: Verify Deployment

**Check these on your live site:**
- ✅ Homepage loads correctly
- ✅ Blog/articles work
- ✅ Contact form works
- ✅ Projects showcase works
- ✅ CSS/JS assets load (check browser dev tools)
- ✅ No 500 errors

## Troubleshooting

### "Permission denied" errors
```bash
# SSH into Hostinger and fix permissions:
chmod -R 775 storage bootstrap/cache
chown -R yourusername:yourusername /path/to/your/site
```

### "Class not found" errors
```bash
# Clear caches:
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear
```

### Assets not loading
- Check if `public/build/` folder exists
- Verify `npm run build` completed successfully
- Check file permissions on `public/` folder

### Database connection errors
- Verify database credentials in `.env`
- Check if database exists in Hostinger hPanel
- Run: `php artisan migrate --force`

## Manual Deployment (if needed)

**If GitHub Actions fails, you can deploy manually:**

```bash
# SSH into Hostinger
ssh yourusername@ssh.hostinger.com -p 65002

# Navigate to your site
cd /home/yourusername/public_html

# Pull latest changes
git pull origin master

# Install dependencies
composer install --no-dev --optimize-autoloader
npm install
npm run build

# Run Laravel commands
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force

# Set permissions
chmod -R 775 storage bootstrap/cache
```

## Benefits of This Setup

- ✅ **Automated**: Push to GitHub → automatic deployment
- ✅ **Secure**: Secrets stay on server, not in repository
- ✅ **Fast**: Only changed files are uploaded
- ✅ **Reliable**: Build happens in clean environment
- ✅ **Rollback**: Easy to revert to previous version via Git

## Next Steps

1. **Set up the secrets** in GitHub
2. **Create the .env file** on Hostinger
3. **Test with a small change**
4. **Verify everything works**
5. **Enjoy automated deployments!** 🚀

---

**Need help with any step? Let me know what you're stuck on!**
