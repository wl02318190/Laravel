<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products'; //指定為products這個表單
    public $timestamps = false;//關閉時間戳

}
