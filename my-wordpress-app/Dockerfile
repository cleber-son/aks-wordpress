FROM wordpress:4.9.1-apache
COPY wordpress/ /var/www/html

RUN apt-get update -y
RUN apt install apt-utils -y
RUN apt install dpkg -y
RUN apt install wget -y
RUN apt install libcurl4-openssl-dev -y

RUN chown -R www-data:www-data /var/www/html/

RUN wget https://github.com/elastic/apm-agent-php/releases/download/v1.6.1/apm-agent-php_1.6.1_all.deb && dpkg -i apm-agent-php_1.6.1_all.deb



RUN echo '[elastic]' > /usr/local/etc/php/conf.d/99-elastic-apm-custom.ini
RUN echo 'elastic_apm.enabled = true' > /usr/local/etc/php/conf.d/99-elastic-apm-custom.ini
RUN echo 'elastic_apm.environment = "production"' > /usr/local/etc/php/conf.d/99-elastic-apm-custom.ini
RUN echo 'lastic_apm.log_level = "INFO"' > /usr/local/etc/php/conf.d/99-elastic-apm-custom.ini
RUN echo 'elastic_apm.log_level_stderr = "INFO"' > /usr/local/etc/php/conf.d/99-elastic-apm-custom.ini
RUN echo 'elastic_apm.secret_token = "hQehvt8IyJJxND4iEy"' > /usr/local/etc/php/conf.d/99-elastic-apm-custom.ini
RUN echo 'elastic_apm.server_url = "https://845f205ff9324b8e8f206bcc6abb2592.apm.us-central1.gcp.cloud.es.io:443"' > /usr/local/etc/php/conf.d/99-elastic-apm-custom.ini
RUN echo 'elastic_apm.service_name = "My service"' > /usr/local/etc/php/conf.d/99-elastic-apm-custom.ini



ENTRYPOINT ["apache2-foreground"]