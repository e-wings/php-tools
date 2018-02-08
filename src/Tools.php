<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 2018/2/7
 * Time: 下午3:30
 */

namespace ewings\php;

class Tools
{

    public function info()
    {
        return "This is Tools class";
    }

    public function array_filter_deep($arr)
    {
        $arr = array_filter($arr);
        foreach ($arr as $key => $value) {
            if (gettype($value) == 'array') {
                $arr[$key]=self::array_filter_deep($value);
            }
        }
        return array_merge($arr);
    }
}