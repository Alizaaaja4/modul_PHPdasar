<p align="center">
  <img src="https://www.php.net//images/logos/new-php-logo.svg" alt="PHP Logo" width="200" height="200">
</p>

# PHP Learning Documentation

This repository contains documentation and code samples for learning PHP. Below are the steps to install PHP, MySQL, and Apache using XAMPP, which is an easy-to-use integrated development environment.

## Installation Guide

### Step 1: Download XAMPP

1. Visit the [XAMPP official website](https://www.apachefriends.org/index.html).
2. Download the XAMPP installer suitable for your operating system (Windows, Linux, or macOS).

### Step 2: Install XAMPP

1. Run the downloaded XAMPP installer.
2. Follow the installation wizard:
   - Choose the components you want to install. Ensure that Apache, MySQL, and PHP are selected.
   - Select the installation directory (the default is usually `C:\xampp`).
3. Complete the installation process by clicking "Next" through the remaining steps and finally clicking "Finish".

### Step 3: Start XAMPP

1. Open the XAMPP Control Panel from your start menu or installation directory.
2. Start the Apache and MySQL services by clicking the "Start" button next to each.

### Step 4: Verify Installation

1. Open your web browser and go to `http://localhost`. You should see the XAMPP dashboard, indicating that Apache is running.
2. To verify PHP, create a new file named `info.php` in the `htdocs` directory (usually located at `C:\xampp\htdocs`).
3. Add the following code to `info.php`:
   ```php
   <?php
   phpinfo();
   ?>
   
### Step 5: Access MySQL
1. Open your web browser and go to http://localhost/phpmyadmin.
2. You will see the phpMyAdmin interface, where you can manage your MySQL databases.

#### Additional Tips
1. XAMPP Control Panel: Use this panel to start/stop services, configure modules, and access various tools.
2. htdocs Directory: Place all your PHP files in this directory to run them locally via http://localhost/yourfile.php.
3. Security: For production environments, ensure to configure security settings appropriately. XAMPP is primarily intended for local development.

#### Troubleshooting
1. Port Conflicts: If Apache or MySQL fail to start, check for port conflicts. You can change the default ports in the XAMPP Control Panel settings.
2. Service Issues: Ensure no other services are using the same ports (e.g., Skype often uses port 80).
