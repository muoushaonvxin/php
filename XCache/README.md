
```shell
[root@zhangyz ~]# cd /usr/local/src
[root@zhangyz src]# wget http://xcache.lighttpd.net/pub/Releases/3.2.0/xcache-3.2.0.tar.gz
[root@zhangyz src]# tar -xf xcache-3.2.0.tar.gz 
 cd xcache-3.2.0
 /usr/local/php5/bin/phpize 
 
 ./configure --enable-xcache --with-php-config=/usr/local/php5/bin/php-config 
 make install 

```
