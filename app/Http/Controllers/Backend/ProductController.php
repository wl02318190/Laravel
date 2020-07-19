<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product; //加入model路徑
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id')->get();//從Product這個資料表以id小到大的方式排序，並取出資料
        return view('backend.product.index', compact('products'));//回傳backend.products.index這個view並傳入參數products，compact為傳入參數函數

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.create');//回傳backend.product.create這個view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!file_exists('uploads/product')) {// 如果路徑不存在，就自動建立
            mkdir('uploads/product', 0755, true);//建立，path=uploads/home，mode=0755，開啟遞歸模式
        }
        
        $product = new Product;
        if ($request->hasFile('image')) {//確認上傳檔案是否存在
            $file = $request->file('image');//取得上傳的圖片
            $path = public_path() . '\uploads\product\\';//取得public這個資料夾的完整路徑
            $fileName = time() . '.' . $file->getClientOriginalExtension();//取得當前時間加上上傳檔案副檔名作為圖片名稱
            $file->move($path, $fileName);//移動fileName這個圖片的位置到path
        }
        else {
            $fileName = 'default.jpg';//否則使用預設圖片
        }
        $product->title = $request->input('title');//新增title欄位的輸入值為'title'所獲得的值，值由使用者輸入
        $product->subtitle = $request->input('subtitle');//新增subtitle欄位的輸入值為'subtitle'所獲得的值，值由使用者輸入
        $product->image = $fileName;//資料庫欄位image的值新增為fileName
        $product->description = $request->input('description');//新增description欄位的輸入值為'description'所獲得的值，值由使用者輸入
        $product->save();//新增
        return redirect()->route('admin.product.index');//重新導回admin.product.index
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);//取得id相對應的資料
        return view('backend.product.edit', compact('product'));//回傳backend.product.edit這個view並傳入參數product，compact為傳入參數函數

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!file_exists('uploads/product')) {// 如果路徑不存在，就自動建立
            mkdir('uploads/product', 0755, true);//建立，path=uploads/home，mode=0755，開啟遞歸模式
        }
        
        $product = Product::find($id);//取得id相對應的資料
        if ($request->hasFile('image')) {//確認上傳檔案是否存在
            // 先刪除原本的圖片
            if ($product->image != 'default.jpg')//如果圖片不是預設的圖
                @unlink('uploads/product/' . $product->image);//刪除原先圖片
            $file = $request->file('image');//取得上傳的圖片
            $path = public_path() . '\uploads\product\\';//取得public這個資料夾的完整路徑
            $fileName = time() . '.' . $file->getClientOriginalExtension();//取得當前時間加上上傳檔案副檔名作為圖片名稱
            $file->move($path, $fileName);//移動fileName這個圖片的位置到path
            $product->image = $fileName;//資料庫欄位image的值新增為fileName
        }
        $product->title = $request->input('title');//新增title欄位的輸入值為inputname='title'所獲得的值，值由使用者輸入
        $product->subtitle = $request->input('subtitle');//新增subtitle欄位的輸入值為inputname='subtitle'所獲得的值，值由使用者輸入
        $product->description = $request->input('description');//新增description欄位的輸入值為inputname='description'所獲得的值，值由使用者輸入
        $product->save();//新增
        return redirect()->route('admin.product.index');//重新導回admin.product.index
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);//取得id相對應的資料
        if ($product->image != 'default.jpg')//如果圖片不是預設的
            @unlink('uploads/product/' . $product->image);//刪除原先圖片
        $product->delete();//刪除該筆資料
        return redirect()->route('admin.product.index');//重新導回admin.product.index
    
    }
}
