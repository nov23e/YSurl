# 短网址
---
> 一个支持域名网址缩短的服务，这里是它的源代码。

## 概述
[zdm.xyz](https://lia.im) 是一个网址缩短服务的网站，这是它的源代码。

## 修改

在原来的基础上增加自适应移动端,随机ACG背景

## 安装
[zdm.xyz](https://lia.im) 基于 PHP、SQLite 进行开发，您只需要修改 `config.php` 的相关配置并把 inc 目录权限设置为可读写即可。

对于 `Nginx` 用户，则还需把 `nginx.txt` 里面的内容添加到 Nginx 的配置文件里。

添加伪静态
```
  location / {
    try_files $uri $uri/ =404;
    rewrite (\d+|\w+)$ /index.php?id=$1;

    location ^~ /asset/ {
      root /var/www/crz.im;
    }

    location ^~ /api/ {
      root /var/www/crz.im;
    }

    location ^~ /inc/ {
      return 403;
    }
  }
```

## 鸣谢
[zdm.xyz](https://lia.im) 项目 Fork 自 [CRZ.im](https://github.com/Caringor/CRZ.im/) ，并遵循 MIT 协议。