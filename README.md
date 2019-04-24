# Container

[![Build Status](https://travis-ci.org/wazsmwazsm/Config.svg?branch=master)](https://travis-ci.org/wazsmwazsm/Config)

## 安装

```bash
composer require wazsmwazsm/config
```

## 使用

配置文件 test_config.php：
```php
return [
	'name' => 'sqlite',
    'connect' => [ 
        'driver'  => 'sqlite',
        'dbname'  => 'database.db',
        'prefix'  => '',
    ],
];
```

加载配置：
```php
use Config\Config;

Config::load('test_config', require('./test_config.php'));
```

获取配置：
```php
use Config\Config;
// 获取名称 (配置文件名.配置名)
$name = Config::get('test_config.name'); // sqlite
$connect = Config::get('test_config.connect'); // ['driver'  => 'sqlite','dbname'  => 'database.db','prefix'  => '']
$dbname = Config::get('test_config.connect.dbname'); // database.db

var_dump($name, $connect, $dbname);
```

设置、更改配置：
```php
use Config\Config;

Config::set('test_config.name', 'somename');
```

获取全部配置：
```php
use Config\Config;

$configs = Config::all();
/*
result is 
[
    'test_config' => [
        'name' => 'sqlite',
        'connect' => [ 
            'driver'  => 'sqlite',
            'dbname'  => 'database.db',
            'prefix'  => '',
        ],
    ]
]
*/
```

## License

The Config is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
