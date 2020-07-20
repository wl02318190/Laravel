<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Website; //加入model路徑
class WebsiteController extends Controller
{
    public function edit() //編輯
    {
        $website = Website::find(1);//取得id (primarykey) = 1的資料
        if (empty($website))//判斷website是否為空
            return view('backend.website.edit'); //為空，回傳backend.website.edit這個view
        else 
            return view('backend.website.edit', compact('website'));//不為空，回傳backend.website.edit這個view並傳入參數website，compact為傳入參數函數

    }
     
    public function update(Request $request) //更新
    {
            
        $website = Website::find(1);//判斷資料庫中是否有資料可以更新
        if (empty($website)) {
            $website = new Website; // 沒有資料 -> 新增
        }
        $website->title = $request->input('title');//新增title欄位的輸入值為inputname='title'所獲得的值，值由使用者輸入
        $website->footer = $request->input('footer');//新增footer欄位的輸入值為inputname='footer'所獲得的值，值由使用者輸入
        $website->save();//新增
        return redirect()->route('admin.website.edit');//重新導回admin.website.edit


    }
}
