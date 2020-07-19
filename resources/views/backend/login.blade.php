<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <!-- 引用Bootstrap裡的CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- 引用google font api，字體Raleway跟Lora 100~900正常字體粗度+斜體-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <!-- 引用css裡的backend.css(自訂) -->
    <link href="{{ asset('css/backend.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container"><!-- 使用bootstrap的container框架可自動適應寬高 -->
        <div class="row justify-content-md-center"><!-- 列 水平置中 平板模式 -->
            <div class="col-sm-5 "><!-- 欄 手機橫頻模式 拿6等分-->
                <section class="page-section my-5 p-5 " ><!-- 引用自訂class 外距3倍rem(48px) 內距3倍rem(48px)-->
                    <form method="POST" action="{{ route('login') }}"><!-- 表單 action送出給route裡的login-->
                        {{ csrf_field() }}<!-- 防止CSRF攻擊-->
                        <div class="form-group row"><!-- 透過在垂直表單中添加row建立成水平表單-->
                            <label class="col-sm-2 col-form-label" for="username">帳號</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="password">密碼</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" name="password">
                            </div>
                        </div>
                        <div class="form-group row justify-content-md-center mt-5">
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-primary">登入</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>