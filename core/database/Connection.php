<?php

class Connection

{
	public static function make($config)
	{
		try {

			return 
			new PDO(

				$config['connection'] . ';dbname=' .
				$config['name'],
				$config['username'],
				$config['password'],
				$config['options']

				);

		} catch (PDOException $e) {
			shit("Could not connect database\n");
			shit($e->getMessage(),1);
	}

	}
}