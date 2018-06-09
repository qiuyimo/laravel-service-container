<?php

include __DIR__ . '/App/People.php';
include __DIR__ . '/App/Dog.php';
include __DIR__ . '/Container.php';

//实例化容器类
$app =  new Container();

//向容器中填充Dog
$app->bind('Dog', 'App\Dog');

//填充People
$app->bind('People', 'App\People');

//通过容器实现依赖注入，完成类的实例化；
try {
    $people = $app->make('People');
} catch (ReflectionException $e) {
    // ...
} catch (Exception $e) {
    // ...
}

//调用方法
echo $people->putDog() . "\n";
