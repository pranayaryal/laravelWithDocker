FROM nginx:1.13.9

ADD vhost.conf /etc/nginx/conf.d/default.conf
