# ProjectNova - WordPress + Bedrock + Sage 10

A modern WordPress development stack using [Bedrock](https://roots.io/bedrock/), [Sage 10](https://roots.io/sage/), Bootstrap 5 (with optional TailwindCSS), and Docker for database management.

---

---

## How to Set Up

### Requirements

- **WSL2 on Windows** (Ubuntu)
- **Node.js 18+** (we recommend `nvm` to install it)
- **Yarn**
- **Composer**
- **PHP 8.1+**
- **MySQL via Docker**

---

### 1. Clone this repo or start a new Bedrock project

```bash
composer create-project roots/bedrock projectnova
cd projectnova
```
--- 
### 2. Configure .env 

Update .env with your database and URL:
```bash
DB_NAME=projectnova
DB_USER=root
DB_PASSWORD=root
DB_HOST=127.0.0.1

WP_ENV=development
WP_HOME=http://projectnova.local
WP_SITEURL=${WP_HOME}/wp
```
### 3. Start MySQL Database via Docker
```bash
docker run --name mysql-nova \
  -e MYSQL_ROOT_PASSWORD=root \
  -e MYSQL_DATABASE=projectnova \
  -p 3306:3306 \
  -d mysql:5.7
```
To start it:
```bash
docker start mysql-nova
```

### 4. Create Sage 10 Theme
Navigate to your themes folder and create the theme:
```bash
cd web/app/themes
composer create-project roots/sage novatheme 10.5.1
```
### 5. Install Theme Dependencies
Inside the novatheme folder:
```bash
cd novatheme
yarn && yarn build
```
### 6. Serve PHP Locally
Back in project root:
```bash
php -S 127.0.0.1:8000 -t web
```
Now visit: http://projectnova.local:8000 or http://localhost:8000 

7. WordPress Installation
Go to:

http://projectnova.local:8000/wp/wp-admin/install.php

Complete the setup using:
```bash
- **DB name: projectnova

- **User: root

- **Password: root

- **Host: 127.0.0.1
```

--------------------------------------------------------------------------------

### Plugin "Advanced Custom Fields Pro"
For this project the plugin was installed manually through a .zip file. 
It was unzipped inside the /plugins directory and the ACF Pro licesne key was added via Wordpress Dashboard.
You can get it from the repository, just is needed to add the Licesne key

To add the License key go to:
```bash
WordPress Admin → ACF → Updates → License Key
```
Paste the key and activate it. 


### Optional
If you don't want to install the plugin manually, you can install the plugin through Composer:
```bash
composer require advanced-custom-fields/advanced-custom-fields-pro
```