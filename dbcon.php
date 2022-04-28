<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)->withServiceAccount('ligueamateurs-firebase-adminsdk-pm6ik-8792fad0aa.json')
			->withDatabaseUri('https://ligueamateurs-default-rtdb.firebaseio.com/');

$database =   $factory->createDatabase();          
?>