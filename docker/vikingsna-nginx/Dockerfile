# use ubuntu image, nginx image doesn't have more_set_headers and nginx-extras package didn't work
FROM ubuntu:16.04

RUN apt-get update && apt-get install -y nginx nginx-extras

COPY conf/etc/nginx/nginx.conf /etc/nginx/nginx.conf

COPY conf/etc/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf

COPY conf/etc/nginx/snippets/cors_headers_1.conf /etc/nginx/snippets/cors_headers_1.conf

COPY conf/etc/nginx/snippets/cors_headers_2.conf /etc/nginx/snippets/cors_headers_2.conf

COPY conf/etc/nginx/ssl/cert.pem /etc/nginx/ssl/cert.pem

COPY conf/etc/nginx/ssl/key.pem /etc/nginx/ssl/key.pem

WORKDIR /etc/nginx

CMD ["nginx"]

EXPOSE 80
EXPOSE 443
