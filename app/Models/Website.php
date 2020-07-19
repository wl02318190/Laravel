<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $table = 'website'; //指定為website這個表單
    public $timestamps = false;//關閉時間戳
}
