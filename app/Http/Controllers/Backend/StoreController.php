<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store; //加入model路徑
class StoreController extends Controller
{
    public function edit() //編輯
    {
        $store = Store::find(1);//取得id (primarykey) = 1的資料
        if (empty($store))//判斷store是否為空
            return view('backend.store.edit');//為空，回傳backend.about.edit這個view
        else
            return view('backend.store.edit', compact('store'));//不為空，回傳backend.store.edit這個view並傳入參數store

    }
     
    public function update(Request $request) //更新
    {

    $store = Store::find(1);//判斷資料庫中是否有資料可以更新
    if (empty($store)) {    //判斷about是否為空
        // 沒有資料 -> 新增
        $store = new Store;
    }
    

    $input = $request->all();//取得所有輸入資料
    $input = array_map('trim', $input);//清除取得的資料中前後空白
    $sun_open = $input['sun_open_h'] . ':' . $input['sun_open_m'];//開啟時間
    $mon_open = $input['mon_open_h'] . ':' . $input['mon_open_m'];
    $tue_open = $input['tue_open_h'] . ':' . $input['tue_open_m'];
    $wed_open = $input['wed_open_h'] . ':' . $input['wed_open_m'];
    $thu_open = $input['thu_open_h'] . ':' . $input['thu_open_m'];
    $fri_open = $input['fri_open_h'] . ':' . $input['fri_open_m'];
    $sat_open = $input['sat_open_h'] . ':' . $input['sat_open_m'];
    $sun_close = $input['sun_close_h'] . ':' . $input['sun_close_m'];//關閉時間
    $mon_close = $input['mon_close_h'] . ':' . $input['mon_close_m'];
    $tue_close = $input['tue_close_h'] . ':' . $input['tue_close_m'];
    $wed_close = $input['wed_close_h'] . ':' . $input['wed_close_m'];
    $thu_close = $input['thu_close_h'] . ':' . $input['thu_close_m'];
    $fri_close = $input['fri_close_h'] . ':' . $input['fri_close_m'];
    $sat_close = $input['sat_close_h'] . ':' . $input['sat_close_m'];
    $store->sun_open = $sun_open;//新增開啟時間到資料庫裡
    $store->mon_open = $mon_open;
    $store->tue_open = $tue_open;
    $store->wed_open = $wed_open;
    $store->thu_open = $thu_open;
    $store->fri_open = $fri_open;
    $store->sat_open = $sat_open;
    $store->sun_close = $sun_close;//新增關閉時間到資料庫裡
    $store->mon_close = $mon_close;
    $store->tue_close = $tue_close;
    $store->wed_close = $wed_close;
    $store->thu_close = $thu_close;
    $store->fri_close = $fri_close;
    $store->sat_close = $sat_close;
    $store->address = $input['address'];//新增address欄位的輸入值為inputname='address'所獲得的值，值由使用者輸入
    $store->phone = $input['phone'];//新增phone欄位的輸入值為inputname='phone'所獲得的值，值由使用者輸入
    $store->save();//新增
    return redirect()->route('admin.store.edit');//重新導回admin.store.edit

    }
}
