<?php

require __DIR__  . '/vendor/autoload.php';

use LunarTime\BaZiPaiPan;

$calender = new BaZiPaiPan();

if (isset($_GET['time'])) {
    $time = $_GET['time'];
}else{
    $year = $_GET['year'];
    $month = isset($_GET['month']) ? $_GET['month'] : $_GET['months'];
    $day = $_GET['date'];
    $hour = $_GET['hours'];
    $minute = $_GET['minutes'];

    $time = strtotime("{$year}-{$month}-{$day} {$hour}:{$minute}");
}

$date =[
   'birthday' => date('YmdHis', $time),
    'name' => 'ss',
    'gender' => 'male',
];

$result = $calender->getResult(
    $date
);


echo json_encode($result, JSON_UNESCAPED_UNICODE);