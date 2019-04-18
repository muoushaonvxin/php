
编译好了php然后网站上面图片显示不出来，后来一查发现没有给php的扩展库安装gd扩展。

要么从新编译一边，要么想别的办法，查询到php支持额外编译安装所需要的扩展，方法如下

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

### 如果上述编译方法图片不能成功展示，可以使用下面的方法来重新进行编译安装

```
[root@zhangyz gd]# ./configure --with-php-config=/usr/local/php5/bin/php-config --with-png-dir=/usr/include/png --with-freetype-dir=/usr/include/freetype2/ --with-jpeg-dir=/usr/include/ --with-gd
[root@zhangyz gd]# make
[root@zhangyz gd]# make test
[root@zhangyz gd]# make install
```

接下来，一套流程走完，然后重启apache服务器在打开原来用php写的网站图片就可以正常显示出来了
