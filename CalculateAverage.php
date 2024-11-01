<?php
include 'sum.php';
include 'count.php';
class CalculateAverage {
    private $sum;
    private $count;

    public function __construct(Sum $sum, Count $count){
$this->sum = $sum;
$this->count = $count;
    }

    public function aveage($array) {
        $totalSum = $this->sum->calculate($array);
        $totalCount = $this->count->calculate($array);
        return $totalCount > 0 ? $totalSum / $totalCount : 0;
    }
}




?>
