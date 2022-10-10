FROM wordpress:4.9.1-apache
COPY wordpress/ /var/www/html
RUN chown -R www-data:www-data /var/www/html/

RUN cd /var/www/html/
RUN apt install wget -y
RUN wget https://github.com/elastic/apm-agent-php/releases/download/v1.4.2/apm-agent-php_1.4.2_all.deb dpkg -i apm-agent-php_1.4.2_all.deb 

ENTRYPOINT ["apache2-foreground"]


