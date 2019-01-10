
首先安装一个包，安装完成之后继续编译mssql即可

```shell
[root@zhangyz ~]# cd /usr/local/src
[root@zhangyz src]# wget ftp://ftp.freetds.org/pub/freetds/stable/freetds-1.00.tar.gz
[root@zhangyz src]# cd freetds-1.00/
[root@zhangyz freetds-1.00]# ./configure --prefix=/usr/local/freetds
[root@zhangyz freetds-1.00]# make
[root@zhangyz freetds-1.00]# make install
```

编译完成之后即可安装mssql额外的第三方库了

```shell
[root@zhangyZ ~]# cd /usr/local/src/php-5.6.4/ext/mssql
[root@zhangyz mssql]# /usr/local/php5/bin/phpize
[root@zhangyz mssql]# ./configure --with-php-config=/usr/local/php5/bin/php-config --with-mssql=/usr/local/freetds/ 
[root@zhangyz mssql]# make
[root@zhangyz mssql]# make install
```

最后编辑 php.ini 配置文件将额外模块添加进去

```shell
[root@zhangyz ~]# vim /usr/local/php5/etc/php.ini
extension = /usr/local/php5/lib/php/extensions/no-debug-zts-20131226/mssql.so
```

安装完成之后重启apache服务器调用php即可
