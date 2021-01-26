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
```bash
$ composer require laravel/ui:^1.0 --dev
$ php artisan ui vue --auth
# 下载npm依赖
$ npm install
# 编译
$ npm run dev
# 如果使用是生产环境还可以执行 npm run production 来压缩静态资源大小
```

3.创建数据库
```bash
$ mysql -uroot -e 'CREATE DATABASE `laravel` DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci'
```

4. 安装laravel-admin框架
```bash
$ composer require encore/laravel-admin:1.*
$ php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"
$ php artisan admin:install
```
