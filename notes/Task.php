<?php

class Task {

	public $description;
	public $completed;

	public function __construct()
	{
		
	}

	public function isCompleted()
	{
		return $this->completed;
	}

	public function lol(){
		echo "LoL";
	}
}
