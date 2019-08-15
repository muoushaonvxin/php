
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

```
