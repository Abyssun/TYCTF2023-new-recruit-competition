FROM m0x1n/nginx_mysql_php73

COPY src /var/www/html

RUN cp -f /var/www/html/flag.sh /flag.sh \
    && rm -rf /var/www/html/flag.sh