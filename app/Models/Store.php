<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'store'; //指定為store這個表單
    public $timestamps = false;//關閉時間戳
}
