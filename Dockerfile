FROM nginx:alpine
COPY . /usr/share/nginx/php
EXPOSE 9000
