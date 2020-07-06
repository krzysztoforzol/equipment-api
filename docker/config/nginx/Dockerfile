FROM nginx:latest

ARG PROJECT_HOST
ARG PROJECT_NAME

RUN printf "\
upstream ui_loadbalancer {\n\
        ip_hash;\n\
        server $PROJECT_NAME-php:9000;\n\
    }\n\
\n\
server {\n\
	server_name $PROJECT_HOST;\n\
	root /var/www/vhosts/website/public;\n\
	access_log  /var/log/nginx/access.log;\n\
	error_log  /var/log/nginx/error.log;\n\
\n\
    location / {\n\
        try_files \$uri /index.php\$is_args\$args;\n\
    }\n\
\n\
    location ~ ^/index\.php(/|$) {\n\
        fastcgi_pass ui_loadbalancer;\n\
        fastcgi_split_path_info ^(.+\.php)(/.*)$;\n\
        include fastcgi_params;\n\
        fastcgi_param SCRIPT_FILENAME \$realpath_root\$fastcgi_script_name;\n\
        fastcgi_param DOCUMENT_ROOT \$realpath_root;\n\
        internal;\n\
    }\n\
    location ~ \.php$ {\n\
        return 404;\n\
    }\n\
}\n" > /etc/nginx/conf.d/site-laravel.conf
