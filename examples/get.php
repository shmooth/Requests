<?php

// First, include the Requests Autoloader.
require_once dirname(__DIR__) . '/src/Autoload.php';

// Next, make sure Requests can load internal classes.
Requests\Autoload::register();

// Now let's make a request!
$request = Requests\Requests::get('http://httpbin.org/get', array('Accept' => 'application/json'));

// Check what we received
var_dump($request);
