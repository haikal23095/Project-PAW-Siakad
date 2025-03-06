## Deploy Project Siakad

## 🚀 Introduction
This repository contains the source code for Project Sistem Informasi akademik - a web application built using html, css, javascipt, and php. This guide will walk you through the steps to deploy the application on your linux machine.

## 📌 Prerequisites
Before deploying, make sure you have:
- Ubuntu or Debian Distributions
- Connect to internet
- Installed Apache or Nginx  Web Srv, Php, Mysql or Mariadb, git, and other php library pack supported on your Machine.

## 📌 How To setup Prereuisites
### 1️⃣ Update repo and upgrade package
```sh
sudo apt update && sudo apt upgrade -y
```
### 2️⃣ Install Dependencies
```sh
sudo apt install apache2 php php8.1-mysql php-xml php-zip php-curl php-mbstring php-gd mariadb-server git -y
```
### 3️⃣ Start and enable apache
```sh
sudo systemctl start apache2 && sudo systemctl enable apache2
```

### 4️⃣ Check the php configuration
```sh
echo "<?php echo phpinfo(); ?>" > /var/www/html/info.php
```
Check info php on your browser =>  type http://[your_ip_address]/info.php

### 5️⃣ Configure mysql secure instalation
```sh
mysql_secure_installation
```


#### ✅ **Setup Finished**


## 🛠 Deployment Steps

### 1️⃣ Clone the Repository
```sh
git clone https://github.com/haikal23095/project-paw-siakad && sudo cd project-paw-siakad
```
