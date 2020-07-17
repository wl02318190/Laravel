<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product'; //指定為product這個表單
    protected $timestamps = false;//關閉時間戳

}
