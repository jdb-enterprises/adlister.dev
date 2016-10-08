<?php

require_once __DIR__ . '/../../models/User.php';

$user = new User;
$user->name = 'Finn Mertens';
$user->email = 'finn@fansofbilly.com';
$user->username = "finn_the_human";
$user->password = $_ENV['USER_PASS'];
$user->address = '123 BS Ave';
$user->city = 'San Antonio';
$user->zipcode = '78015';
$user->state ='TX';

$user->save();

$user = new User;
$user->name = 'Jake';
$user->email = 'jake@fansofbilly.com';
$user->username = "jake_the_dog";
$user->password = $_ENV['USER_PASS'];
$user->address = '123 BS Ave';
$user->city = 'San Antonio';
$user->state ='TX';
$user->zipcode = '78015';
$user->save();

$user = new User;
$user->name = 'Simon Petrikov';
$user->email = 'iceking@princessaholicanonymous.com';
$user->username = "ice_king";
$user->password = $_ENV['USER_PASS'];
$user->address = '123 BS Ave';
$user->city = 'San Antonio';
$user->state ='TX';
$user->zipcode = '78015';
$user->save();

$user = new User;
$user->name = 'Marceline Abadeer';
$user->email = 'marceline@vampirequeen.com';
$user->username = "marceline_abadeer";
$user->password = $_ENV['USER_PASS'];
$user->address = '123 BS Ave';
$user->city = 'San Antonio';
$user->state ='TX';
$user->zipcode = '78015';
$user->save();