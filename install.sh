#! /bin/bash

# Check root permissions
if `test $USER != root`
then
	echo "You are not a root user, please enter your password"
	sudo ./$0;
fi

# Installation of necessary dependencies
if `test $USER == root`
then
	apt update && apt install apache2 -y && apt install php libapache2-mod-php -y && wget https://exiftool.org/Image-ExifTool-12.38.tar.gz &&  gzip -dc Image-ExifTool-12.38.tar.gz | tar -xf - && cd Image-ExifTool-12.38 && perl Makefile.PL && apt install make -y && make test && make install  && rm -f ../Image-ExifTool-12.38.tar.gz  && rm -r ../Image-ExifTool-12.38/ && cp -r ../www/* /var/www/html/ && rm -r /var/www/html/index.html && chown www-data:www-data /var/www/html/file/ && chmod 766 /var/www/html/file/
fi

