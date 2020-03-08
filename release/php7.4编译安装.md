```shell
[root@zhangyz php-7.4.3]# yum -y install libxml2 libxml2-devel curl-devel 
[root@zhangyz php-7.4.3]# yum install https://dl.fedoraproject.org/pub/epel/7/x86_64/Packages/o/oniguruma-5.9.5-3.el7.x86_64.rpm
[root@zhangyz php-7.4.3]# yum install https://dl.fedoraproject.org/pub/epel/7/x86_64/Packages/o/oniguruma-devel-5.9.5-3.el7.x86_64.rpm
[root@zhangyz php-7.4.3]# yum -y install openldap openldap-devel
[root@zhangyz php-7.4.3]# cp -frp /usr/lib64/libldap* /usr/lib/
[root@zhangyz php-7.4.3]# ./configure  --prefix=/usr/local/php7.4 --with-config-file-path=/usr/local/php7.4/etc --with-fpm-user=nginx --with-fpm-group=nginx --enable-fpm --enable-opcache --enable-inline-optimization --disable-debug --disable-rpath --enable-shared -enable-mysqlnd --with-mysqli=mysqlnd --with-pdo-mysql=mysqlnd --enable-mysqlnd-compression-support --with-iconv-dir --with-zlib --enable-xml --disable-rpath --enable-bcmath --enable-shmop --enable-sysvsem --enable-inline-optimization --with-curl --enable-mbregex --enable-mbstring --enable-intl --enable-ftp --enable-gd --enable-gd-jis-conv --with-jpeg   --with-freetype  --with-openssl --with-mhash --enable-pcntl --enable-sockets --with-xmlrpc --with-zip --enable-soap --with-gettext --disable-fileinfo --with-pear --enable-maintainer-zts --with-ldap=shared --without-gdbm
```

#### 编译安装libzip

```shell
[root@zhangyz ~]# wget https://nih.at/libzip/libzip-1.2.0.tar.gz
[root@zhangyz ~]# tar -zxvf libzip-1.2.0.tar.gz
[root@zhangyz libzip-1.2.0]# cd libzip-1.2.0
[root@zhangyz libzip-1.2.0]# ./configure
[root@zhangyz libzip-1.2.0]# make && make install
```

