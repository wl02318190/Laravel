@extends('backend.layouts.master')  <!--繼承master-->

@section('title', 'Product Edit') <!--title-->
@section('nav_products', 'active') <!--讓nav_products=avtive 用來觸發narbar裡的選單標籤活動狀態-->
@section('content')<!-- 以下是內容-->

<div class="container">
    
    <section class="page-section my-5 p-5"><!-- 引用自訂class 外距3倍rem(48px) 內距3倍rem(48px)-->
        <!--使用POST方式傳遞 傳遞到product使用update函數並傳遞該條資料的id enctype=傳送前不對字符進行編碼-->
        <form method="POST" action="{{ route('admin.product.update',  $product->id) }}" enctype="multipart/form-data">

            {{ csrf_field() }}<!-- 防止CSRF攻擊-->

            {{ method_field('PUT') }}<!--夾帶PUT方式傳遞，PUT=覆蓋整筆資料-->

            <div class="form-group row"><!--表單-->
                <label class="col-sm-2 col-form-label" for="title">商品名稱</label><!--輸入框標題 for=與哪個intput綁定-->
                <div class="col-sm-10"><!--欄 10等分-->
                    <!--輸入框 值是從products這張資料表的title欄位 -->
                    <input class="form-control" type="text" name="title" value="{{$product->title}}">
                </div>
            </div>

            <div class="form-group row"><!--表單-->
                <label class="col-sm-2 col-form-label" for="subtitle">商品副標題</label><!--輸入框標題 for=與哪個intput綁定-->
                <div class="col-sm-10"><!--欄 10等分-->
                    <!--輸入框 值是從products這張資料表的substitle欄位 -->
                    <input class="form-control" type="text" name="subtitle" value="{{$product->subtitle}}">
                </div>
            </div>

            <div class="form-group"><!--表單-->
                <label for="description">商品描述</label><!--輸入框標題 for=與哪個intput綁定-->
                <!--輸入框 值是從products這張資料表的description欄位 -->
                <textarea class="form-control" type="text" name="description" rows="5">{{$product->description}}</textarea>
            </div>

            <div class="form-group row"><!--表單-->
                <label class="col-sm-2 col-form-label" for="image">圖片</label><!--輸入框標題 for=與哪個intput綁定-->
                <div class="col-sm-10"><!--欄 10等分-->
                    <input class="form-control" type="file" name="image">
                </div>
                <!--圖片 src=新增的圖片位置 isset確認圖片是否存在 class=top外距1rem(16px) style=圖片長寬 百分比=隨著頁面寬度顯示多少百分比的長寬
                object-fit=讓圖片調整到可以放進style所設置的長寬 onerror=當圖片不存在或遺失時預設的圖片-->
                <img src="{{ asset('uploads/product/' . $product->image) }}" class="mt-3" style="height: 100%; width: 100%; object-fit: contain" onerror="this.src='{{ asset('uploads/product/default.jpg') }}'">
            </div>

            <div class="form-group row justify-content-end"><!--表單 row=轉成水平表單 水平置中 平板模式 -->
                <div class="col-sm-2"><!--欄 1等分-->
                    <button type="submit" class="btn btn-primary">更新</button><!--按鈕 原始樣式-->
                </div>
            </div>
            
        </form>

    </section>
    
</div>


@endsection