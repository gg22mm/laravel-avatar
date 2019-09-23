# laravel-avatar
根据第一个字符或者汉字生成头像的laravel扩展包

## 基本使用
1. 先发布配置文件在config目录下面
```bash
php artisan vendor:publish
```
2. app.php 添加 providers
```php
Wll\Cxp\Avatar\AvatarProvider::class,
```

```
3 开始使用
```php

use Wll\Cxp\Avatar\Facades\Avatar;	

// 第一个参数姓名，第二个参数图片生成位置
Avatar::output('赵','zhao.png')
```
