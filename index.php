<?php

include 'calculateAverage.php';
include 'AverageSaver.php';

// استفاده از کلاس ها
$arrey = [10, 20, 30, 40, 50];

$connection = new ConnectionToDatabase();
$sum = new sum();
$count = new count();
$calculateAverage = new CalculataAverage($sum, $count);
$averageSaver = new AverageSaver($connection);

$totalsum = $sum->calculate($array);
$totalcount = $count->calculate($arrat);
$average = $calculateAverage->average($arrey);


$averageSaver->saveStatistics($totalsum,$totalcount,$average);


echo "sum: $totalsum, count: $totalcount , Average: $average ";
// بستن اتصال به بایگان داده
$connection->getConnection()->close();



?>
