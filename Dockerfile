FROM linuxserver/nginx:1.20.2
ENV TZ=America/Chicago
ADD --chown=1000:1000 www /config/www