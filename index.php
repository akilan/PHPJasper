<?php
require_once "app/bootstrap.php";
use PHPJasper\PHPJasper;
/*
$input = __DIR__ . '/jasper/hello_world.jrxml';

$jasper = new PHPJasper;
$jasper->compile($input)->execute();
*/
$input = __DIR__ . '/jasper/kgfs_P2P_report.jrxml';  
$output = __DIR__ . '/jasper/examples';

$options = [ 
    'format' => ['pdf', 'rtf'],
    'params' => ['bank_name'=>'Pudhuaaru','kgfs_date'=>'2015-05-28'],
    'db_connection' => [
        'driver' => 'mysql', //mysql, ....
        'username' => '',
        'password' => '',
        'host' => 'sit.perdix.co.in',
        'database' => 'sit_kgfs_financialForms',
        'port' => '3306'
    ]
];

$jasper = new PHPJasper;

$jasper->process(
    $input,
    $output,
    $options
)->execute();
echo "Report Generated";