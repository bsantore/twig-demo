<?php

include __DIR__ . './../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../templates');

$twig = new Twig_Environment($loader);

// echo $twig->render('basic-page.html');
// echo $twig->render('layouts-page.html');



echo $twig->render('template-variables.html', [
	'person' => 'Brett',
	'pets' => [
		'Hermit Crab',
		'Dog'
	],
	'fears' => [
		'ghosts'
	]
]);