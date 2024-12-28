@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
 
@section('product')
   <div class="flea-market__product">
      <div class="flea-market__heading">
        <h3>商品登録</h3>
      </div>
　　　<form class="form" action="/products/product" 　　　method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">商品名</span>
            <button>必須</button>
        </div>
        <div class="form__input--text">
              <input type="product" name="product" placeholder="商品名を入力" value="{{ old('product') }}"/>
            </div>
            <p>商品名を入力してください</p>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">値段</span>
            <button>必須</button>
        </div>
        <div class="form__input--text">
              <input type="product" name="product" placeholder="値段を入力" value="{{ old('product') }}"/>
            </div>
            <p>値段を入力してください</p>
            <p>数値を入力してください</p>
            <p>0-10000円以内で入力してください</p>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">商品画像</span>
            <button>必須</button>
        　　<button class="form__button-submit" type="submit">ファイルを選択</button>

    </div>
</div>
@endsection