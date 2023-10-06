FROM php:fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip

WORKDIR /var/www

RUN curl -OL https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar && \cp /var/www/phpcs.phar /usr/local/bin/phpcs && \chmod +x /usr/local/bin/phpcs 
# Set some useful defaults to phpcs
# show_progress - I like to see a progress while phpcs does its magic
# colors - Enable colors; My terminal supports more than black and white
# report_width - I am using a large display so I can afford a larger width
# encoding - Unicode all the way
RUN /usr/local/bin/phpcs --config-set show_progress 1 && \
    /usr/local/bin/phpcs --config-set colors 1 && \
    /usr/local/bin/phpcs --config-set report_width 140 && \
    /usr/local/bin/phpcs --config-set encoding utf-8
ENTRYPOINT ["/usr/local/bin/phpcs"]