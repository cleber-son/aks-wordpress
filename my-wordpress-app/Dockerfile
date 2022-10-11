FROM wordpress:4.9.1-apache
COPY wordpress/ /var/www/html

RUN apt-get update -y && \
    apt install python3 -y

RUN chown -R www-data:www-data /var/www/html/


ENTRYPOINT ["apache2-foreground"] 