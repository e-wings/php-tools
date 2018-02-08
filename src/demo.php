<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 2018/2/7
 * Time: 下午3:49
 */
require '../vendor/autoload.php';
use ewings\php\Tools;

$arr=['','a'=>'b',['c'=>'c',''=>''],'e'=>'f','','3'];
$arr_correct=['a'=>'b',['c'=>'c'],'e'=>'f','3'];

$tool=new Tools();
$arr_result=$tool->array_filter_deep($arr);
var_dump($arr_result);
echo('<br/>');
var_dump(array_merge($arr_result));
echo('<br/>');
var_dump($arr_correct);
echo('<br/>');
var_dump($arr_result==$arr_correct);
echo('<br/>');
var_dump($arr_result===$arr_correct);
echo('<br/>');