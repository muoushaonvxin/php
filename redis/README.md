为编译安装的php解释器添加redis模块的方法

#### 首先下载所需要的额外安装包
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

    [    <=>                                                                                                                                                                                     ] 122,063      187K/s   in 0.6s    

2018-09-25 11:21:01 (187 KB/s) - “phpredis-2.2.4.tar.gz” saved [122063]

[root@zhangyz ~]# tar -xf phpredis-2.2.4.tar.gz 
[root@zhangyz ~]# cd phpredis-2.2.4
[root@zhangyz phpredis-2.2.4]# 
```
