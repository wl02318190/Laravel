<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home; //加入model路徑
class HomeController extends Controller
{
    public function edit() //編輯
    {
        $home = Home::find(1);//取得id (primarykey) = 1的資料
        if (empty($home))//判斷home是否為空
            return view('backend.home.edit');//為空，回傳backend.home.edit這個view
        else
            return view('backend.home.edit', compact('home'));//不為空，回傳backend.home.edit這個view並傳入參數home
    
    }
     
    public function update(Request $request) //更新
    {
            
        if (!file_exists('uploads/home')) {     // 如果路徑不存在，就自動建立
            mkdir('uploads/home', 0755, true);  //建立，path=uploads/home，mode=0755，開啟遞歸模式
        }
        
        $home = Home::find(1);//判斷資料庫中是否有資料可以更新
        if (empty($home)) {//判斷home是否為空
            // 沒有資料 -> 新增
            $home = new Home;
            $fileName = 'default.jpg';
        } 
        if ($request->hasFile('image')) {//確認上傳檔案是否存在
            
            if ($home->image != 'default.jpg')//如果圖片不是預設的圖
                @unlink('uploads/home/' . $home->image);//刪除原先圖片
            $file = $request->file('image');//取得上傳的圖片
            $path = public_path() . '\uploads\home\\';//取得public這個資料夾的完整路徑
            $fileName = time() . '.' . $file->getClientOriginalExtension();//取得當前時間加上上傳檔案副檔名作為圖片名稱
            $file->move($path, $fileName);//移動fileName這個圖片的位置到path
        }
        $home->content_1 = $request->input('content_1');//新增content_1欄位的輸入值為inputname='content_1'所獲得的值，值由使用者輸入
        if ($fileName) {//如果有上傳圖片
            $home->image = $fileName;//資料庫欄位image的值新增為fileName
        }
        $home->save();//新增
        return redirect()->route('admin.home.edit');//重新導回admin.home.edit
    }
}
