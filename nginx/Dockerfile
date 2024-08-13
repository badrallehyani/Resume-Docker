FROM nginx:alpine

ADD nginx.conf /etc/nginx/conf.d/default.conf

WORKDIR /etc/nginx/

COPY origin.pem certificates/
COPY private.key certificates/