下载memcached
```shell
[root@zhangyz ~]# cd /usr/local/src
[root@zhangyz src]# wget http://pecl.php.net/get/memcached-2.2.0.tgz
```

解压
```shell
[root@zhangyz src]# tar -xf memcached-2.2.0.tgz
```

7.进目录配置安装

```shell
[root@zhangyz ~]# cd memcached-2.2.0
[root@zhangyz ~]# ./configure --with-php-config=/usr/local/php/bin/php-config --with-libmemcached-dir=/usr/local/libmemcached --disable-memcached-sasl
[root@zhangyz ~]# make && make install
```
