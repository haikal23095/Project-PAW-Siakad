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
sudo apt install apache2 php php8.1-mysql php-xml php-zip php-curl php-mbstring php-gd mariadb git -y
```
### 3️⃣ Start and enable apache
```sh
sudo systemctl start apache2 && sudo systemctl enable apache2
sudo systemctl start mariadb
```

### 4️⃣ Check the php configuration
```sh
echo "<?php echo phpinfo(); ?>" > info.php
sudo mv info.php /var/www/html
```
Check info php on your browser =>  type http://[your_ip_address]/info.php

### 5️⃣ Configure mysql secure instalation
```sh
mysql_secure_installation
```
### Enter the answer like below
Enter current password for root (enter for none): 
Switch to unix_socket authentication [Y/n] : Y
Change the root password? [Y/n] : Y
New password: 
Re-enter new password:
Remove anonymous users? [Y/n] : Y
Disallow root login remotely? [Y/n] : N
Remove test database and access to it? [Y/n] : Y
Reload privilege tables now? [Y/n] : Y

#### ✅ **Setup Finished**


## 🛠 Deployment Steps

### 1️⃣ Clone the Repository
```sh
git clone https://github.com/haikal23095/project-paw-siakad
cd project-paw-siakad
```


