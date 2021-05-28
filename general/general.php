<?php
// Your code here!
$arr = ['1'=>'one','2'=>'two','3'=>'three','4'=>'four'];


$implode = implode($arr);
print_r($implode);

/*$arrkey = array_keys($arr);*/
//echo array_key_last ( $arr );

$arr1 = ['1','2','3','4'];
$arr2 = ['1','2','3','4'];
print_r(array_combine($arr, $arr2));
?>
