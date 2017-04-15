<?php

$re_tasks = $app['database']->selectAll('todos');

require 'view/index.view.php';