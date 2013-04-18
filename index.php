<?php

require 'vendor/autoload.php';

use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Configuration;

$params = array(
	'dbname' => '',
	'user' => '',
	'password' => '',
	'host' => 'localhost',
	'driver' => 'pdo_mysql',
);

$config = new \Doctrine\DBAL\Configuration();

$conn = DriverManager::getConnection($params, $config);

// Let's get it on...