<?php

include __DIR__ . './../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../templates');

$twig = new Twig_Environment($loader);


class ViewModel
{
	public $person;
	public $pets = [];
	public $fears = [];
}

$viewModel = new ViewModel;
$viewModel->person = 'Brett';
$viewModel->pets = [
	'Hermit Crab',
	'Dog'
];
$viewModel->fears[] = 'Grapes';

echo $twig->render('basic-variables.html', [
	'vm' => $viewModel
]);