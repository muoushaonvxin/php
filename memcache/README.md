php连接memcache扩展安装包的下载地址为

* http://pecl.php.net/package/memcache

```shell
[root@zhangyz src]# wget http://pecl.php.net/get/memcache-2.2.7.tgz 
--2019-03-11 16:10:12--  http://pecl.php.net/get/memcache-2.2.7.tgz
Resolving pecl.php.net... 104.236.228.160
Connecting to pecl.php.net|104.236.228.160|:80... connected.
HTTP request sent, awaiting response... 200 OK
Length: 36459 (36K) [application/octet-stream]
Saving to: “memcache-2.2.7.tgz”

2019-03-11 16:10:13 (167 KB/s) - “memcache-2.2.7.tgz” saved [36459/36459]

[root@zhangyz src]# tar -xf memcache-2.2.7.tgz
[root@zhangyz src]# cd memcache-2.2.7
[root@zhangyz memcache-2.2.7]# /usr/local/php5/bin/phpize 
Configuring for:
PHP Api Version:         20131106
Zend Module Api No:      20131226
Zend Extension Api No:   220131226
[root@zhangyz memcache-2.2.7]# ./configure --with-php-config=/usr/local/php5/bin/php-config 
[root@zhangyz memcache-2.2.7]# make
[root@zhangyz memcache-2.2.7]# make install
Installing shared extensions:     /usr/local/php5/lib/php/extensions/no-debug-zts-20131226/
```
