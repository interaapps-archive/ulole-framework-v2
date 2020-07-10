<p align="center"><img src="https://cdn.interaapps.de/ulole/icons/ulole1.svg" width="200"><br>Ulole-Framework Version 2 ALPHA</p>



# Ulole Framework 2 (ALPHA)

## Based on
[ulole-core](https://github.com/interaapps/ulole-core)
[ulole-orm](https://github.com/interaapps/ulole-orm)
[deverm router](https://github.com/interaapps/deverm)
[helper](https://github.com/uppm/helper)

```php
<?php
namespace app\controller;

class WelcomeController {
    /**
     * Hello world page
     * 
     * @return string
     */
    public static function about() {
        return "Hello world!";
    }
}
```

`This is just the development version. If we are ready soon there is a new version! :D`

## Installation
Currently there is no installation method for ulole-frameworkv v2
```bash
php uppm.php install
```

Update Packages:
```bash
php uppm update
```

## Features
- Useful CLI with custom commands support (php cli)
- Build in TestServer (php cli server)
- Database ORM (Multi DB Support, Multible SQL server types usable)
- Database Migration-Tool
- Template Engine
- Ulole Modules
- A Router
- Template Engine
- CSS and JS Combinder
- Easy MultiLanguagesupport implementation
- Object-oriented
- Sessionmanager
- Useful utils
- Fast
- Little folder size (1.4 MB [In version 1.0.28])

#### Controller
```php
<?php
namespace app\controller;

class AboutController {
    /**
     * Hello world page
     * 
     * @return string
     */
    public static function about() {
        return "Hello world!";
    }
}
```

#### Orm
```php
<?php
namespace models;

use modules\uloleorm\Table;

class User extends Table {
    
    public $id;
    public $username;
    public $password;

    public function __construct(){
        // DATABASE IN env.json
        $this->setDatabase("main");
        // TABLE NAME
        $this->setTable("user");
    }

}
```

#### Migration
```php
<?php
namespace databases\migrate;

use modules\uloleorm\migrate\Migrate;

class UserTable extends Migrate {
    public function database() {
        $this->create('user', function($table) {
            $table->int("id")->ai();
            $table->string("username");
            $table->string("password", 155);
        });
    }
}
```

#### Debug
![https://i.imgur.com/W8otsxK.png](https://i.imgur.com/W8otsxK.png)
