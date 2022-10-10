FROM wordpress:4.9.1-apache
COPY wordpress/ /var/www/html


RUN ls
RUN apt-get -y update
RUN apt install apt-utils -y
RUN apt install dpkg -y
RUN apt install wget -y




RUN wget https://github.com/elastic/apm-agent-php/releases/download/v1.6.1/apm-agent-php_1.6.1_all.deb
RUN ls
RUN pwd

RUN chown -R www-data:www-data /var/www/html/


RUN dpkg -i apm-agent-php_1.6.1_all.deb
   



ENTRYPOINT ["apache2-foreground"]


