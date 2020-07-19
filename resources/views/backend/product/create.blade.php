@extends('backend.layouts.master')  <!--繼承master-->

@section('title', 'Product Create') <!--title-->
@section('nav_products', 'active') <!--讓nav_products=avtive 用來觸發narbar裡的選單標籤活動狀態-->
@section('content')<!-- 以下是內容-->

<div class="container">

    <section class="page-section my-5 p-5"><!-- 引用自訂class 外距3倍rem(48px) 內距3倍rem(48px)-->
        <!--使用POST方式傳遞 傳遞到product使用store函數 enctype=傳送前不對字符進行編碼-->
        <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">

            {{ csrf_field() }}<!-- 防止CSRF攻擊-->

            <div class="form-group row"><!--表單-->
                <label class="col-sm-2 col-form-label" for="title">商品名稱</label><!--輸入框標題 for=與哪個intput綁定-->
                <div class="col-sm-10"><!--欄 10等分-->
                    <input class="form-control" type="text" name="title"><!--輸入框-->
                </div>
            </div>

            <div class="form-group row"><!--表單-->
                <label class="col-sm-2 col-form-label" for="subtitle">商品副標題</label><!--輸入框標題 for=與哪個intput綁定-->
                <div class="col-sm-10"><!--欄 10等分-->
                    <input class="form-control" type="text" name="subtitle"><!--輸入框-->
                </div>
            </div>

            <div class="form-group"><!--表單-->
                <label for="description">商品描述</label><!--輸入框標題 for=與哪個intput綁定-->
                <!--tinymce的文字編輯器 將輸入內容新增至products這個資料表裡的description欄位-->
                <textarea class="form-control" type="text" name="description" rows="5"></textarea>
            </div>

            <div class="form-group row"><!--表單-->
                <label class="col-sm-2 col-form-label" for="image">圖片</label><!--輸入框標題 for=與哪個intput綁定-->
                <div class="col-sm-10"><!--欄 10等分-->
                    <input class="form-control" type="file" name="image"><!--輸入框 type=檔案類型-->
                </div>
            </div>

            <div class="form-group row justify-content-end"><!--表單 row=轉成水平表單 水平置中 平板模式 -->
                <div class="col-sm-2"><!--欄 2等分-->
                    <button type="submit" class="btn btn-primary">新增</button><!--按鈕 原始樣式-->
                </div>
            </div>
            
        </form>

    </section>
   
</div>


@endsection