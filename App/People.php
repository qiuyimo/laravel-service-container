<?php
/**
 * Created by PhpStorm.
 * User: qiuyu
 * Date: 2018/6/9
 * Time: 下午2:58
 */

namespace App;

class People
{
    public $dog = null;

    public function __construct(Dog $dog)
    {
        $this->dog = $dog;
    }

    public function putDog()
    {
        return $this->dog->dogCall();
    }
}
