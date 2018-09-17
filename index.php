<?php
require_once "app/bootstrap.php";
use PHPJasper\PHPJasper;
/*
$input = __DIR__ . '/jasper/hello_world.jrxml';

$jasper = new PHPJasper;
$jasper->compile($input)->execute();
*/
$input = __DIR__ . '/jasper/hello_world.jasper';  
$output = __DIR__ . '/jasper/examples';    
$options = [ 
    'format' => ['pdf', 'rtf'] 
];

$jasper = new PHPJasper;

$jasper->process(
    $input,
    $output,
    $options
)->execute();