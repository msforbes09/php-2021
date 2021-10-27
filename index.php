<?php

$name = htmlspecialchars(ucfirst(strtolower($_GET['name'])));
$greetings = "Hello, {$name}";

require 'index.view.php';
