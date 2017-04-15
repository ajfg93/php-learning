<?php

$app = [];
$app['config'] = require 'config.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Router.php';
require 'core/Request.php';
//require always starts at project root 根目录 


$app['database'] = new QueryBuilder(

	Connection::make($app['config']['database'])

);