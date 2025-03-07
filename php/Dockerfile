FROM php:8.0-apache

# ติดตั้ง PHP extension mysqli และเปิดใช้งาน
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# อัปเดตระบบภายใน container
RUN apt-get update && apt-get upgrade -y

# ติดตั้งเพิ่มเติม (หากต้องการ)
# RUN apt-get install -y [package-name]

# คัดลอกไฟล์โปรเจคไปที่ Apache server
COPY ./src /var/www/html/

# เปิดใช้งาน mod_rewrite ของ Apache
RUN a2enmod rewrite
