
今儿个遇到一个特别蛋疼的问题，编译好了php然后网站上面图片显示不出来，后来一查发现没有给php的扩展库安装gd扩展，然后悲剧了。

要么从新编译一边，要么想别的办法，作为一个合格的服务人员我查了动态编译的方法，随机解决了这个问题

```shell
[root@zhangyz ~]# cd /usr/local/src/php-5.6.37
[root@zhangyz php-5.6.37]# cd ext/gd/
[root@zhangyz gd]# /usr/local/php5/bin/phpize
[root@zhangyz gd]# yum -y install libpng libpng-devel
[root@zhangyz gd]# ./configure --with-php-config=/usr/local/php5/bin/php-config --with-gd
[root@zhangyz gd]# make
[root@zhangyz gd]# make test
[root@zhangyz gd]# make install
```

接下来，一套流程走完，然后重启apache服务器在打开原来用php写的网站图片就可以正常显示出来了
