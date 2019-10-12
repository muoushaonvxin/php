
### swoole管理包工具的位置

<br/>

* http://pecl.php.net/package/swoole

swoole是php的网络通讯引擎，是用c语言实现的php底层扩展

```shell
[root@zhangyz ~]# tar -xf swoole-4.2.1.tgz 
[root@zhangyz swoole-4.2.1]# cd swoole-4.2.1
[root@zhangyz swoole-4.2.1]# /usr/local/php7.1/bin/phpize 
[root@zhangyz swoole-4.2.1]# ./configure --with-php-config=/usr/local/php7.1/bin/php-config 
[root@zhangyz swoole-4.2.1]# make
[root@zhangyz swoole-4.2.1]# make install
```
