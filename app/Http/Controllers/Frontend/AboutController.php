<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About; //加入model路徑
use App\Models\Website;
class AboutController extends Controller
{
    public function index ()
{
    $about = About::find(1);
    $website = Website::find(1);
    return view('Frontend.about', compact('about', 'website'));
}
}
