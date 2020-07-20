@extends('backend.layouts.master') <!--繼承master-->

@section('title', 'Website Edit') <!--title-->
@section('nav_website','active')<!--讓nav_about=avtive 用來觸發narbar裡的選單標籤活動狀態-->
@section('content')<!-- 以下是內容-->

<div class="container">
            
    <section class="page-section my-5 p-5"><!-- 引用自訂class 外距3倍rem(48px) 內距3倍rem(48px)-->
        <!--使用POST方式傳遞 傳遞到website.upsdate-->
        <form method="POST" action="{{ route('admin.website.update') }}">

            {{ csrf_field() }}<!-- 防止CSRF攻擊-->

            <div class="form-group row"><!--表單-->
                <label class="col-sm-2 col-form-label" for="title">網站標題</label><!--輸入框標題 for=與哪個intput綁定-->
                <div class="col-sm-10"><!--欄 10等分-->
                    <!--輸入框 isset用來確認值是否存在-->
                    <input class="form-control" type="text" name="title" value="@isset($website) {{$website->title}} @endisset">
                </div>
            </div>

            <div class="form-group row"><!--表單-->
                <label class="col-sm-2 col-form-label" for="footer">網站頁尾文字</label><!--輸入框標題 for=與哪個intput綁定-->
                <div class="col-sm-10"><!--欄 10等分-->
                    <!--輸入框 isset用來確認值是否存在-->
                    <input class="form-control" type="text" name="footer" value="@isset($website) {{$website->footer}} @endisset">
                </div>
            </div>

            <div class="form-group row justify-content-end"><!--表單 row=轉成水平表單 水平置中 平板模式 -->
                <div class="col-sm-1"><!--欄 1等分-->
                    <button type="submit" class="btn btn-primary">更新</button><!--按鈕-->
                </div>
            </div>
            
        </form>

    </section>
    
</div>


@endsection