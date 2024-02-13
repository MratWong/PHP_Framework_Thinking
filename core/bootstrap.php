<?php
use core\App;
require "core/function.php";
App::bind('config',require "config.php");
App::get('config');
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
// dd(App::get('database'));
// $config = require "config.php";
// $database = new QueryBuilder(
//     Connection::make(App::get('config')['database'])
// );

