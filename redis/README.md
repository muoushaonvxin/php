## 为编译安装的php解释器添加redis模块的方法

<br/>


1.首先下载所需要的额外安装包并且进行解压

```shell
[root@zhangyz ~]# wget https://github.com/phpredis/phpredis/archive/2.2.4.tar.gz -O phpredis-2.2.4.tar.gz
--2018-09-25 11:20:59--  https://github.com/phpredis/phpredis/archive/2.2.4.tar.gz
Resolving github.com... 192.30.253.112, 192.30.253.113
Connecting to github.com|192.30.253.112|:443... connected.
HTTP request sent, awaiting response... 302 Found
Location: https://codeload.github.com/phpredis/phpredis/tar.gz/2.2.4 [following]
--2018-09-25 11:21:00--  https://codeload.github.com/phpredis/phpredis/tar.gz/2.2.4
Resolving codeload.github.com... 192.30.253.120, 192.30.253.121
Connecting to codeload.github.com|192.30.253.120|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: unspecified [application/x-gzip]
Saving to: “phpredis-2.2.4.tar.gz”

[<=====================================================================>] 122,063      187K/s   in 0.6s    

2018-09-25 11:21:01 (187 KB/s) - “phpredis-2.2.4.tar.gz” saved [122063]

[root@zhangyz ~]# tar -xf phpredis-2.2.4.tar.gz 
[root@zhangyz ~]# cd phpredis-2.2.4
[root@zhangyz phpredis-2.2.4]# 
```

2.接下来进行编译安装, 指定编译安装的路径

```shell
[root@zhangyz phpredis-2.2.4]# /usr/local/php5/bin/phpize 
Configuring for:
PHP Api Version:         20131106
Zend Module Api No:      20131226
Zend Extension Api No:   220131226
[root@zhangyz phpredis-2.2.4]# ./configure --with-php-config=/usr/local/php5/bin/php-config 
[root@zhangyz phpredis-2.2.4]# make test

Build complete.
Don't forget to run 'make test'.


=====================================================================
PHP         : /usr/local/php5/bin/php 
PHP_SAPI    : cli
PHP_VERSION : 5.6.37
ZEND_VERSION: 2.6.0
PHP_OS      : Linux - Linux zhangyz 2.6.32-696.6.3.el6.x86_64 #1 SMP Wed Jul 12 14:17:22 UTC 2017 x86_64
INI actual  : /usr/src/phpredis-2.2.4/tmp-php.ini
More .INIs  :  
CWD         : /usr/src/phpredis-2.2.4
Extra dirs  : 
VALGRIND    : Not used
=====================================================================
TIME START 2018-09-25 03:42:35
=====================================================================
No tests were run.
[root@zhangyz phpredis-2.2.4]# make install 
Installing shared extensions:     /usr/local/php5/lib/php/extensions/no-debug-zts-20131226/
```

3.编辑php.ini文件引入redis.so模块让php进行加载

```shell
[root@zhangyz ~]# vim /usr/local/php5/etc/php.ini
extension = /usr/local/php5/lib/php/extensions/no-debug-zts-20131226/redis.so
```

4.保存完毕重启apache让配置生效即可.



redis当中的数据类型


| Redis数据类型 | 存储的值 | 读写能力 |
| -------------|----------|--------------|
| String      | 可以是字符串,整数或浮点,统称为元素 | 对字符串操作对整数加减 |
| List | 一个序列集合且每个节点都包好了一个元素 | 序列两端推入或弹出元素修剪, 查找或移除元素 |
| Set | 各不相同的元素 | 从集合中插入或删除元素 |
| Hash | 有 key-value 的散列组, 其中key是字符串, value 是元素 | 按照key进行增加删除 |
| Sort Set | 带分数的score-value有序集合, 其中score为浮点, value为元素 | 集合插入, 按照分数范围查找 |

