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

cd cd memcached-2.2.0

 ./configure --with-php-config=/usr/local/php/bin/php-config --with-libmemcached-dir=/usr/local/libmemcached --disable-memcached-sasl
  make && make install
安装完成后会提示安装生成.so文件目录

 Installing shared extensions:     /usr/local/php/lib/php/extensions/no-debug-non-zts-20121212/
进入这么目录看一下，果然有了
————————————————
版权声明：本文为CSDN博主「fanruitian」的原创文章，遵循CC 4.0 BY-SA版权协议，转载请附上原文出处链接及本声明。
原文链接：https://blog.csdn.net/u010615629/article/details/78325470
