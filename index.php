<?php
$array = array(90, 35, 40, 40, 30);

//標準偏差の関数作成。←PHPのマニュアルに書かれていたコードが使用できなかった為。
function ssd($array)
{
 $avg = array_sum($array)/count($array);
 //各値の平均値と差の二乗を算出
 $diff_array = array();
   foreach ($array as $value)
   {
     $diff = $value - $avg;
     $diff_array[] = pow($diff, 2);	
   }
 //上記差の二乗の合計を算出
 $diff_total = array_sum($diff_array);
 //平均を算出
 $diff_avg = $diff_total/count($array);
 //標準偏差を算出(平方根を取る)
 $stdev = sqrt($diff_avg);
 //標準偏差を返す
 return $stdev;
}


$array = array(90, 35, 40, 40, 30);

//個数
$cou = count($array);
//平均値
$avg = array_sum($array)/count($array);
//最大値
$max = max($array);
//最小値
$min = min($array);
//標準偏差
$ssd = ssd($array);

echo "個数:" . $cou ."\n" ;
echo "最大:" . $max ."\n" ;
echo "最小:" . $min ."\n" ;
echo "平均:" . number_format($avg, 1) ."\n" ;
echo "標準偏差:" . number_format($ssd, 1) ."\n" ;
