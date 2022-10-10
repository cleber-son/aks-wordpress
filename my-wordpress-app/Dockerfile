FROM wordpress:4.9.1-apache
COPY wordpress/ /var/www/html

RUN apt-get update -y && \
    apt install apt-utils -y && \
    apt install dpkg -y && \
    apt install wget -y && \
    apt install curl -y && \
    apt install unzip -y && \
    apt install libcurl4-openssl-dev -y

RUN chown -R www-data:www-data /var/www/html/

RUN wget https://github.com/elastic/apm-agent-php/archive/refs/tags/v1.6.1.zip && \
    mkdir zzz && \
    unzip v1.6.1.zip -d zzz && \
    cd zzz/apm-agent-php-1.6.1/src/ext && \
    phpize && \
    CFLAGS="-std=gnu99" ./configure --enable-elastic_apm && \
    make clean && \
    make && \
    make install

RUN echo '[elastic]' > /usr/local/etc/php/conf.d/99-elastic-apm-custom.ini && \
    echo 'extension=elastic_apm.so' >> /usr/local/etc/php/conf.d/99-elastic-apm-custom.ini && \
    echo 'elastic_apm.bootstrap_php_part_file=zzz/apm-agent-php-1.6.1/src/bootstrap_php_part.php' >> /usr/local/etc/php/conf.d/99-elastic-apm-custom.ini && \
    echo 'elastic_apm.enabled = true' >> /usr/local/etc/php/conf.d/99-elastic-apm-custom.ini && \
    echo 'elastic_apm.environment = "production"' >> /usr/local/etc/php/conf.d/99-elastic-apm-custom.ini && \
    echo 'lastic_apm.log_level = "INFO"' >> /usr/local/etc/php/conf.d/99-elastic-apm-custom.ini && \
    echo 'elastic_apm.log_level_stderr = "INFO"' >> /usr/local/etc/php/conf.d/99-elastic-apm-custom.ini && \
    echo 'elastic_apm.secret_token = "hQehvt8IyJJxND4iEy"' >> /usr/local/etc/php/conf.d/99-elastic-apm-custom.ini && \
    echo 'elastic_apm.server_url = "https://845f205ff9324b8e8f206bcc6abb2592.apm.us-central1.gcp.cloud.es.io:443"' >> /usr/local/etc/php/conf.d/99-elastic-apm-custom.ini && \
    echo 'elastic_apm.service_name = "My service"' >> /usr/local/etc/php/conf.d/99-elastic-apm-custom.ini

RUN ls zzz/
RUN ls /usr/local/etc/php/conf.d/



ENTRYPOINT ["apache2-foreground"]
