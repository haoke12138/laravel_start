执行步骤

1. 部署laravel 应用程序
在部署之前需要确认php的`fileinfo`模块是否为启用状态
```bash
$ composer install --optimize-autoloader --no-dev
# 部署laravel应用成生产环境的项目

$ php artisan key:generate
# 指定应用程序加密密钥
```  
2. 安装用户验证脚手架
用户验证
执行命令：
```
$ composer require laravel/ui:^1.0 --dev
$ php artisan ui vue --auth
# 下载npm依赖
$ npm install
# 编译
$ npm run dev
# 如果使用是生产环境还可以执行 npm run production 来压缩静态资源大小
```
