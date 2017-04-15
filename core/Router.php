<?php

class Router 

{
	 protected $routes;

	 public static function load($file)
	 {
	 	$routes = new static;
	 	//创建一个新的Router实例
	 	//在构造函数里这样用会造成递归调用
	 	//但在这个静态方法里是不会的
	 	require $file;
	 	return $routes;
	 }

	 public function define($routes)
	 {
	 	$this->routes = $routes;
	 }

	 public function direct($uri)
	 {
	 	//example.com/about/culture	
	 	if (array_key_exists($uri, $this->routes)){
	 		return $this->routes["{$uri}"];
	 	}else{
	 		return $this->routes["404"];
	 	}  

	 	// throw new Exception("No route defined for this URI", 1);

	 	

	 }
}