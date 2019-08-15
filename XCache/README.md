
```shell
[root@zhangyz ~]# cd /usr/local/src
[root@zhangyz src]# wget http://xcache.lighttpd.net/pub/Releases/3.2.0/xcache-3.2.0.tar.gz
[root@zhangyz src]# tar -xf xcache-3.2.0.tar.gz 
[root@zhangyz src]# cd xcache-3.2.0
[root@zhangyz xcache-3.2.0]# /usr/local/php5/bin/phpize 
[root@zhangyz xcache-3.2.0]# ./configure --enable-xcache --with-php-config=/usr/local/php5/bin/php-config 
[root@zhangyz xcache-3.2.0]# make install 
/bin/sh /usr/local/src/xcache-3.2.0/libtool --mode=install cp ./xcache.la /usr/local/src/xcache-3.2.0/modules
cp ./.libs/xcache.so /usr/local/src/xcache-3.2.0/modules/xcache.so
cp ./.libs/xcache.lai /usr/local/src/xcache-3.2.0/modules/xcache.la
PATH="$PATH:/sbin" ldconfig -n /usr/local/src/xcache-3.2.0/modules
----------------------------------------------------------------------
Libraries have been installed in:
   /usr/local/src/xcache-3.2.0/modules

If you ever happen to want to link against installed libraries
in a given directory, LIBDIR, you must either use libtool, and
specify the full pathname of the library, or use the `-LLIBDIR'
flag during linking and do at least one of the following:
   - add LIBDIR to the `LD_LIBRARY_PATH' environment variable
     during execution
   - add LIBDIR to the `LD_RUN_PATH' environment variable
     during linking
   - use the `-Wl,--rpath -Wl,LIBDIR' linker flag
   - have your system administrator add LIBDIR to `/etc/ld.so.conf'

See any operating system documentation about shared libraries for
more information, such as the ld(1) and ld.so(8) manual pages.
----------------------------------------------------------------------
Installing shared extensions:     /usr/local/php5/lib/php/extensions/no-debug-zts-20131226/
```

接下来编辑配置文件, 引入 xcache.so

```shell
[root@zhangyz ~]# vim /usr/local/php5/etc/php.ini
[xcache-common]
extension=/usr/local/php5/lib/php/extensions/no-debug-zts-20131226/xcache.so

[xcache.admin]
xcache.admin.enable_auth = On
xcache.admin.user = "xcache"
xcache.admin.pass = "e10adc3949ba59abbe56e057f20f883e"

[xcache]
xcache.shm_scheme = "mmap"
xcache.size = 512M
xcache.count = 1
xcache.slots = 8k
xcache.ttl = 0
xcache.gc_interval = 0
xcache.var_size = 4M
xcache.var_count = 1
xcache.var_slots = 8K
xcache.var_ttl = 0
xcache.var_maxttl = 0
xcache.var_gc_interval = 300
xcache.test = Off
xcache.readonly_protection = On
xcache.mmap_path = "/tmp/xcache"
xcache.coredump_directory = ""
xcache.cacher = On
xcache.stat = On
xcache.optimizer = Off

[xcache.coverager]
xcache.coverager = On
xcache.coveragedump_directory = ""
```

创建缓存文件

```shell
[root@zhangyz ~]# touch /tmp/xcache
[root@zhangyz ~]# /usr/local/php5/bin/php -v
PHP 5.6.31 (cli) (built: Oct 30 2017 13:29:02) 
Copyright (c) 1997-2016 The PHP Group
Zend Engine v2.6.0, Copyright (c) 1998-2016 Zend Technologies
    with XCache v3.2.0, Copyright (c) 2005-2014, by mOo
    with XCache Cacher v3.2.0, Copyright (c) 2005-2014, by mOo
```

创建 xcache 的web显示界面

```shell
[root@zhangyz ~]# mkdir /data/www/blog/xcache/
[root@zhangyz ~]# cp -r /usr/local/src/xcahe-3.2.0/htdocs /data/www/blog/xcache
[root@zhangyz ~]# cd /data/www/blog/xcache/htdocs
[root@zhangyz ~]# ll
total 28
drwxr-xr-x 4 root root 4096 Aug 15 14:38 cacher
drwxr-xr-x 3 root root 4096 Aug 15 14:38 common
-rw-r--r-- 1 root root  425 Aug 15 14:38 config.default.php
-rw-r--r-- 1 root root 1867 Aug 15 14:38 config.example.php
drwxr-xr-x 3 root root 4096 Aug 15 14:38 coverager
drwxr-xr-x 3 root root 4096 Aug 15 14:38 diagnosis
-rw-r--r-- 1 root root  185 Aug 15 14:38 index.php
```
