<?php

// First, include the Requests Autoloader.
require_once dirname(__DIR__) . '/src/Autoload.php';

// Next, make sure Requests can load internal classes.
Requests\Autoload::register();

// Now let's make a request!
$options = array(
	'auth' => array('someuser', 'password'),
);
$request = Requests\Requests::get('http://httpbin.org/basic-auth/someuser/password', array(), $options);

// Check what we received
var_dump($request);
