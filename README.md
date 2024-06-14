# ACore mini-reg-page

This is a simple and minimalistic registation-only page (no password change, no reset password options available).
This project is dedicated for Azeroth Core (maybe it will work with other cores like CMangos - not tested).

Support : [AzerothCore](http://azerothcore.org)

## Requirements:
Apache2, MariaDB/MySQL, PHP >=7.0, Docker (optional)

## Installation

 - sudo apt install apache2 php mysql-server php-mbstring php-gd php-gmp php-mysql
 - phpenmod pdo
 - phpenmod pdo_mysql
 - systemctl restart apache2
 - download project or clone to /var/www/html directory
 - go to config/ folder and edit config.php file

## Docker
 - Clone the repository: git clone https://github.com/azerothcore/acore-mini-reg-page.git
 - Configure the application: copy .env.example to .env and edit the file.
 - Build and run: docker-compose up -d --build

 ## Screenshot
![preview](https://raw.githubusercontent.com/nolt/acore-mini-reg-page/master/img/preview.jpg)
![preview](https://raw.githubusercontent.com/nolt/acore-mini-reg-page/master/img/preview2.jpg)


Code is based on very old Nostalrius site with mine tweaks and updates to work with AzerothCore.
