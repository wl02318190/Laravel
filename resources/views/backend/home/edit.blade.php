@extends('backend.layouts.master') <!--繼承master-->

@section('title', 'Home Edit') <!--title-->
@section('nav_home', 'active') <!--讓nav_home=avtive 用來觸發narbar裡的選單標籤活動狀態-->
@section('content')<!-- 以下是內容-->

<div class="container">

    <section class="page-section my-5 p-5"><!-- 引用自訂class 外距3倍rem(48px) 內距3倍rem(48px)-->
        <!--使用POST方式傳遞 傳遞到home.upsdate enctype=傳送前不對字符進行編碼-->
        <form method="POST" action="{{ route('admin.home.update') }}" enctype="multipart/form-data">

            {{ csrf_field() }}<!-- 防止CSRF攻擊-->

            <div class="form-group"><!--表單-->
                <label for="content_1">首頁文字區域 1</label><!--輸入框標題 for=與哪個intput綁定-->
                <!--tinymce的文字編輯器 將輸入內容新增至home這個資料表裡的content_1欄位 並確認該輸入框是否有內容-->
                <textarea class="form-control" type="text" name="content_1" rows="5">@isset($home) {{$home->content_1}} @endisset</textarea>
            </div>

            <div class="form-group"><!--表單-->
                <label for="content_2">首頁文字區域 2</label><!--輸入框標題 for=與哪個intput綁定-->
                <!--tinymce的文字編輯器 將輸入內容新增至home這個資料表裡的content_2欄位 並確認該輸入框是否有內容-->
                <textarea class="form-control" type="text" name="content_2" rows="5">@isset($home) {{$home->content_2}} @endisset</textarea>
            </div>

            <div class="form-group row"><!--表單 row=轉成水平表單-->
                <label class="col-sm-2 col-form-label" for="image">圖片</label><!--輸入框標題 for=與哪個intput綁定-->
                <div class="col-sm-10"><!--欄 10等分-->
                    <input class="form-control" type="file" name="image"><!--輸入框 type=檔案類型-->
                </div>
                 <!--圖片 src=新增的圖片位置 isset確認圖片是否存在 class=top外距1rem(16px) style=圖片長寬 百分比=隨著頁面寬度顯示多少百分比的長寬
                object-fit=讓圖片調整到可以放進style所設置的長寬 onerror=當圖片不存在或遺失時預設的圖片-->
                <img src="@isset($home) {{ asset('uploads/home/' . $home->image) }} @endisset" class="mt-3" style="height: 100%; width: 100%; object-fit: contain" onerror="this.src='{{ asset('uploads/home/default.jpg') }}'">
            </div>

            <div class="form-group row justify-content-end"><!--表單 row=轉成水平表單 水平置中 平板模式 -->
                <div class="col-sm-2"><!--欄 2等分-->
                    <button type="submit" class="btn btn-primary">更新</button><!--按鈕 原始樣式-->
                </div>
            </div>

        </form>

    </section>

</div>


@endsection