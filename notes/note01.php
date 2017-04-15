<?php

$person = [
	'age' => 23,
	'hair' => 'brown',
	'career' => 'web developer',

];


$task = [
	'title' => 'Learn PHP',
	'due' => 'Every day',
	'assigned_to' => 'Peng Tianqing',
	'completed' => true,
];




$tasks = [
	new Task("Wash Clothes"),
	new Task("Hand in new employee registration paper"),
	new Task("Eat out with friends"),
];

$tasks[0]->completed = true;
// $tasks[0]->lol();
//php没有点运算符

$re_tasks = array_map(function ($task){
	$t = new Task();
	$t->description = $task->description;
	$t->completed = $task->completed;
	return $t;
}, $re_tasks);

fuck($re_tasks,1);