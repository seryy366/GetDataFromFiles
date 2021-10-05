<?php

namespace csv\base;

use csv\Db;

abstract class Model{

    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct(){
        Db::instance();
    }

}