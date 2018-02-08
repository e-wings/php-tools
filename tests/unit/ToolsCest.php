<?php

require './vendor/autoload.php';
use ewings\php\Tools;

class ToolsCest
{
    public function _before(UnitTester $I)
    {
    }

    public function _after(UnitTester $I)
    {
    }

    // tests
    public function tryToTest(UnitTester $I)
    {
//        $tool=new Tools();
//        $I->assertEquals('This is Tools class',$tool->info());
    }

    public function testArrayFilterDeep(UnitTester $I){
        $tool=new Tools();

        $arr=['','a'=>'b',['c'=>'c',''=>''],'e'=>'f','','3'];
        $arr_correct=['a'=>'b',['c'=>'c'],'e'=>'f','3'];
        $arr_result=$tool->array_filter_deep($arr);
        $I->assertTrue($arr_result==$arr_correct);

        $arr=['','a'=>'b','a'=>['c'=>'c',''=>'','d'=>[1,2,3]],'e'=>'f','','3'];
        $arr_correct=['a'=>'b','a'=>['c'=>'c','d'=>[1,2,3]],'e'=>'f','3'];
        $arr_result=$tool->array_filter_deep($arr);
        $I->assertTrue($arr_result==$arr_correct);
    }
}
