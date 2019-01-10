
有的时候在php代码当中经常会碰到一些奇奇怪怪的问题，这些问题产生的原因都很有可能是因为配置文件的参数没有正确的进行配置所导致的

有的时候在php代码当中配置好了时间代码，但是在测试的时候突然发现代码显示的时间和当前系统的时间不一致这就是没有在php配置文件当中单独配置时间区域所照成的，解决方法编辑配置文件重启apache服务器

```shell
[root@zhangyz ~]# vim /usr/local/php5/etc/php.ini
[Date]
date.timezone = Asia/Shanghai
[root@zhangyz ~]# service httpd restart
......
```
