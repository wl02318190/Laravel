<!-- Navigation Start-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary"><!-- 導覽列 當到lg這個段點出現漢堡式選單 文字顏色dark 背景顏色primary-->
    <div class="container">
        <a class="navbar-brand" href="#">Backend</a><!-- 左上Logo-->
        <!--class=漢堡式選單按鈕 data-toggle=點擊後觸發collapse(第10行) data-target=觸發navbarSupportedContent這個div
        aria-controls=控制ID為navbarSupportedContent這個選單  aria-expanded=選單是否展開 aria-label=這個標籤的註解-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span><!--漢堡式表單icon-->
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"><!--選單 yield("nav_頁面名稱")用來啟動選單欄位的活動狀態-->
            <div class="navbar-nav">
                <a class="nav-item @yield('nav_website') nav-link" href="{{ route('admin.website.edit') }}">Website</a>
                <a class="nav-item @yield('nav_home') nav-link" href="{{ route('admin.home.edit') }}">Home</a>
                <a class="nav-item @yield('nav_about') nav-link" href="{{ route('admin.about.edit') }}">About</a>
                <a class="nav-item @yield('nav_products') nav-link" href="{{ route('admin.product.index') }}">Products</a>
                <a class="nav-item @yield('nav_store') nav-link" href="{{ route('admin.store.edit') }}">Store</a>
                <a class="nav-item @yield('nav_logout') nav-link" href="{{ route('admin.logout') }}">Logout</a>
            </div>
        </div>
    </div>
</nav>
<!-- Navigation End  -->