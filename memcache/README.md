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


php函数调用手册官方网站 

https://www.php.net/manual/zh


Memcache函数所有的方法列表如下：


| 调用方法 | 作用说明 |
-----------------------
| Memcache::add | 添加一个值，如果已经存在，则返回false | 
Memcache::addServer – 添加一个可供使用的服务器地址 
Memcache::close – 关闭一个Memcache对象 
Memcache::connect – 创建一个Memcache对象 
memcache_debug – 控制调试功能 
Memcache::decrement – 对保存的某个key中的值进行减法操作 
Memcache::delete – 删除一个key值 
Memcache::flush – 清除所有缓存的数据 
Memcache::get – 获取一个key值 
Memcache::getExtendedStats – 获取进程池中所有进程的运行系统统计 
Memcache::getServerStatus – 获取运行服务器的参数 
Memcache::getStats – 返回服务器的一些运行统计信息 
Memcache::getVersion – 返回运行的Memcache的版本信息 
Memcache::increment – 对保存的某个key中的值进行加法操作 
Memcache::pconnect – 创建一个Memcache的持久连接对象 
Memcache::replace -对一个已有的key进行覆写操作 
Memcache::set – 添加一个值，如果已经存在，则覆写 
Memcache::setCompressThreshold – 对大于某一大小的数据进行压缩 
Memcache::setServerParams – 在运行时修改服务器的参数
