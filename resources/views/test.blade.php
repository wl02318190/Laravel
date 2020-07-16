<?php
use App\Product;
$products = App\Product::all();  //SQl指令 all代表取出全部
foreach ($products as $data) {
    echo $data->name;   //取出名字
    echo $data->price;  //取出price
    echo "<br>";        //換行
}