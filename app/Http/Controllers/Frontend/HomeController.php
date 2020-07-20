<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home; //加入model路徑
use App\Models\Website;
class HomeController extends Controller
{
    public function index ()
{
    $home = Home::find(1);
    $website = Website::find(1);
    return view('Frontend.index', compact('home', 'website'));

}
}
