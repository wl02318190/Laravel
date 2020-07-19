<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About; //加入model路徑

class AboutController extends Controller
{
    public function edit() //編輯
    {
        $about = About::find(1);//取得id (primarykey) = 1的資料
        if (empty($about))//判斷about是否為空
            return view('backend.about.edit');//為空，回傳backend.about.edit這個view
        else
            return view('backend.about.edit', compact('about'));//不為空，回傳backend.about.edit這個view並傳入參數about
    }
     
    public function update(Request $request) //更新
    {   
        if (!file_exists('uploads/about')) {    // 如果路徑不存在，就自動建立
            mkdir('uploads/about', 0755, true); //建立，path=uploads/home，mode=0755，開啟遞歸模式
        }
        $about = About::find(1);    //判斷資料庫中是否有資料可以更新
        if (empty($about)) {    //判斷about是否為空
            // 沒有資料 -> 新增
            $about = new About;
            $fileName = 'default.jpg';
        } 
        if ($request->hasFile('image')) { //確認上傳檔案是否存在
  
            if ($about->image != 'default.jpg')//如果圖片不是預設的圖
                @unlink('uploads/about/' . $about->image);//刪除原先圖片
            $file = $request->file('image');//取得上傳的圖片
            $path = public_path() . '\uploads\about\\';//取得public這個資料夾的完整路徑
            $fileName = time() . '.' . $file->getClientOriginalExtension();//取得當前時間加上上傳檔案副檔名作為圖片名稱
            $file->move($path, $fileName);//移動fileName這個圖片的位置到path
        }
        $about->content = $request->input('content');//新增content欄位的輸入值為inputname='content'所獲得的值，值由使用者輸入
        if ($fileName) {//如果有上傳圖片
            $about->image = $fileName;//資料庫欄位image的值更改為fileName
        }
        $about->save();//新增
        return redirect()->route('admin.about.edit');//重新導回admin.about.edit
    
        
    }
}
