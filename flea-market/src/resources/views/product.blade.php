@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('product')
    <div class="product__product">
  <div class="product__heading">
        <h2>商品一覧</h2>
      </div>
 <form class="form" action="/product" method="post">
       @csrf
        <div class="form__group-product">
            <div class="form__input--text">
              <input type="text" name="product" placeholder="商品名で検索" value="{{ old('product') }}"/>
            </div>
            <div class="form__button">
          <button class="form__button-submit" type="submit">検索</button>
          <div class="product__product">
          <div class="product__heading">
          <h3>低価格順で表示</h3>
        </div>
　      <select name="price">
                  $product = product('price', 'asc')->get();
        </select>
@endsection