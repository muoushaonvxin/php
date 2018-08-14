## php在linux下的编译安装方法

<br>

<br>

```shell
[root@zhangyz php-5.6.31]# ./configure --prefix=/usr/local/php5 \
--with-config-file-path=/usr/local/php5/etc \
--with-mysql=/usr/local/mysql \
--with-mysqli=/usr/local/mysql/bin/mysql_config \
--with-pdo-mysql=/usr/local/mysql/ \
--with-iconv-dir --with-freetype-dir \
--with-jpeg-dir \
--with-png-dir \
--with-zlib \
--with-libxml-dir=/usr \
--enable-xml \
--enable-discard-path \
--enable-magic-quotes \
--enable-safe-mode \
--enable-bcmath \
--enable-shmop \
--enable-system \
--enable-inline-optimization \ 
--with-curl \
--enable-mbregex \
--enable-fastcgi \
--enable-fpm \
--enable-force-cgi-redirect \
--enable-mbstring \
--with-mcrypt \
--enable-ftp \
--with-gd \
--enable-gd-native-ttf \
--with-openssl \
--with-mhash \
--enable-pcntl \
--enable-sockets \
--with-xmlrpc \
--enable-zip \
--enable-soap \
--without-pear \
--with-gettext \
--with-mime-magi
[root@zhangyz php-5.6.31]# make
[root@zhangyz php-5.6.31]# make test
[root@zhangyz php-5.6.31]# make install 
```
