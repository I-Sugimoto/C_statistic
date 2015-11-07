<?php
$ary = array(90, 35, 40, 40, 30);
$result = stats_standard_deviation($data);
 var_dump($result); 
 //float(31.84399472428)

function ssd($ary)
{
 $avg = array_sum($ary)/count($ary);
 //各値の平均値と差の二乗を算出
 $diff_ary = array();
   foreach ($ary as $value)
   {
     $diff = $value - $avg;
     $diff_ary[] = pow($diff, 2);	
   }
 //上記差の二乗の合計を算出
 $diff_total = array_sum($diff_ary);
 //平均を算出
 $diff_avg = $diff_total/count($diff_ary);
 //標準偏差を算出(平方根を取る)
 $stdev = sqrt($diff_avg);
 //標準偏差を返す
 return $stdev;
}

var_dump(ssd);