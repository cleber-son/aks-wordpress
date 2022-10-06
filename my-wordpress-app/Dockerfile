FROM wordpress:4.9.1-apache
COPY public/ /var/www/html
RUN chown -R www-data:www-data /var/www/html/
ENTRYPOINT ["apache2-foreground"]