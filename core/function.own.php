<?php 

function fuck($params, $die = 0){
	echo "<pre>";
	var_dump($params);
	echo "</pre>";
	if($die == 1){
		die();
	}
}

function shit($params, $die = 0){
	echo "<pre>";
	echo "$params";
	echo "</pre>";
	if($die == 1){
		die();
	}
}

function connectDb(){
	try {
		return new PDO('mysql:host=127.0.0.1;dbname=mytodo' ,'root', '');
	} catch (PDOException $e) {
		shit("Could not connect database\n");
		shit($e->getMessage(),1);
	}
}

function fetchTasks($pdo){
	$statement = $pdo->prepare("select * from todos");
	$statement->execute();
	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');	
}