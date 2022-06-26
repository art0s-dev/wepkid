<?php

#Declare some environment specifications for better debugging
declare(strict_types=1);
error_reporting(E_ERROR | E_WARNING | E_ALL);

#Get Autoloader
require dirname(dirname(dirname(__FILE__))) . './vendor/autoload.php';

#Import Statements
use Wepkid\core\test;

$test = new test();

// echo '<pre>';
// $user = getenv();
// var_dump($user);
// die('brrbrr');
// //$pdo = new PDO(, , , [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
// $query = $pdo->query('SHOW VARIABLES like "version"');
// $row = $query->fetch();
// echo 'MySQL version:' . $row['Value'];
