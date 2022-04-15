FROM php:7.4.28-apache-bullseye
RUN docker-php-ext-install mysqli

ARG VERSION=12.38

RUN cd /tmp && \
    apt install perl -y && \
    curl -O https://exiftool.org/Image-ExifTool-$VERSION.tar.gz && \
    tar -xzvf Image-ExifTool-*.tar.gz && \
    rm -rf Image-ExifTool-*.tar.gz && \
    cd Image-ExifTool-* && \
    rm -rf html t Change Makefile.PL MANIFEST META.json META.yml perl-Image-ExifTool.spec README && \
    mv * /usr/local/bin/ && \
    rm -rf /tmp/Image-ExifTool-*
