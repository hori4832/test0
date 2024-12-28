@extends('layouts.app')

@section('title')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
 
@section('product')
   <div class="flea-market__product">
      <div class="flea-market__heading">
        <h3>商品登録</h3>
      </div>
<body>
<h2>商品一覧</h2>
<table>
    @foreach ($Manager_List as $Manager)
    <tr>
        <td>{{ $Manager->login_id }}</td>
    </tr>
    <form method="POST" action="/" enctype="multipart/form-data">
  @csrf
  <input type="file" name="image">
  <button>検索</button>
</form>

    @endforeach
</table>
</body>
</html>