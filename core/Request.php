<?php 

class Request

{
	public static function uri ()

	{
		$uri = trim($_SERVER['REQUEST_URI'], '/');
		$re_uri = array();
		for ($i=0; $i < strlen($uri); $i++) { 
			if($uri[$i] == '?'){
				break;
			}
			$re_uri[$i] = $uri[$i];
		}

		// fuck(join($re_uri), 1);
		return join($re_uri);
	}
}