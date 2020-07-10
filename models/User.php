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