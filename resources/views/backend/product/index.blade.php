@extends('backend.layouts.master') <!--繼承master-->

@section('title', 'Product List')<!--title-->
@section('nav_products', 'active') <!--讓nav_products=avtive 用來觸發narbar裡的選單標籤活動狀態-->
@section('content')<!-- 以下是內容-->
<div class="container">
    <section class="page-section my-5 p-5"><!-- 引用自訂class 外距3倍rem(48px) 內距3倍rem(48px)-->
        <div class="row"><!--列-->
            <div class="col-sm-3"><!--欄 3等分-->
                <!--按鈕 連結到create view-->
                <a href="{{ route('admin.product.create') }}" class="btn btn-primary">新增商品</a>
            </div>
        </div>
        <div class="row"><!--列-->
            <table class="table mt-5"><!--表格 外框3倍rem(48)px-->
                <thead>
                    <tr>
                        <th scope="col">編號</th>
                        <th scope="col">商品名稱</th>
                        <th scope="col">商品副標題</th>
                        <th scope="col">圖片</th>
                        <th scope="col">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product) <!--資料表for迴圈-->
                        <tr>
                            <th class="align-middle" scope="row">{{ $product->id }}</th><!--class=垂直置中 ID欄位-->
                            <td class="align-middle">{{ $product->title }}</td><!--class=垂直置中 title欄位-->
                            <td class="align-middle">{{ $product->subtitle }}</td><!--class=垂直置中 subtitle欄位-->
                            <!--class=垂直置中 圖片-->
                            <td class="align-middle"><img src="{{ asset('uploads/product/'. $product->image) }}" width="100px"></td>
                            <td class="align-middle">
                                <!--修改按鈕 根據ID修改-->
                                <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-primary">修改</a>
                                 <!--刪除按鈕 根據ID刪除-->
                                <form method="POST" action="{{ route('admin.product.destroy', $product->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-secondary">刪除</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No Product</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection