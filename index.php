<?php

//my fuck shit function
require 'core/function.own.php';

require 'core/bootstrap.php';

$params = $_GET;

require Router::load('routes.php')

	->direct(Request::uri());

//这里只要返回一个正确的字符串地址就可以了











