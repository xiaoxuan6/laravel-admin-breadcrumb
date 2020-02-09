这个扩展包用来 汉化面包屑导航

![php-badge](https://img.shields.io/badge/php-%3E%3D%207.0.0-8892BF.svg)
![Latest Laravel Admin](https://img.shields.io/badge/laravelAdmin-%3E%3D%201.6-8892BF.svg)
[![Downloads this Month](https://img.shields.io/packagist/dm/james.xue/laravel-admin-breadcrumb.svg)](https://packagist.org/packages/james.xue/laravel-admin-breadcrumb)
[![Downloads total](https://img.shields.io/packagist/dt/james.xue/laravel-admin-breadcrumb.svg)](https://packagist.org/packages/james.xue/laravel-admin-breadcrumb)
[![Latest stable](https://poser.pugx.org/james.xue/laravel-admin-breadcrumb/v/stable)](https://packagist.org/packages/james.xue/laravel-admin-breadcrumb)
[![Licence](https://img.shields.io/packagist/l/james.xue/laravel-admin-breadcrumb.svg?style=flat-square)](https://packagist.org/packages/james.xue/laravel-admin-breadcrumb)

## Screenshot

![screenshot](https://github.com/xiaoxuan6/laravel-admin-breadcrumb/blob/master/20190225154750.png)

Installation

First, install dependencies:

    composer require james.xue/laravel-admin-breadcrumb
    
Second, Publish Extension Files

    php artisan vendor:publish --tag=breadcrumb

Third，Override built-in views

    app('view')->prependNamespace('admin', resource_path('views/admin'));
    
Fourth
 In the extensions section of the config/admin.php file, add some configuration that belongs to this extension.
 
     'extensions' => [
         'breadcrumb' => [
             'enable' => true,
         ]
     ]

### 注意事项
<div>
    <table border="0">
	  <tr>
	    <th>Version</th>
	    <th>Laravel-Admin Version</th>
	  </tr>
	  <tr>
	    <td>1.1.2.1</td>
	    <td>< 1.7</td>
	  </tr>
	  <tr>
        <td>^1.2.*</td>
        <td>>= 1.7.9</td>
      </tr>
	  <tr>
        <td>1.3.*</td>
        <td>1.7.9</td>
      </tr>
	</table>
</div> 

# 1.1.2.1 User
       
将控制器中
       
    use Encore\Admin\Layout\Content;
       
替换

    use James\Admin\Breadcrumb\Layout\Content;
    
# 1.2.* / 1.3.* User

将控制器中
       
    use Encore\Admin\Controllers\AdminController;
       
替换

    use James\Admin\Breadcrumb\BaseController;
