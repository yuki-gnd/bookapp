@extends('layouts.bookapp')

@yield('title')

@section('content')
@parent

<h3>※一覧表示※</h3>
<table>
    <tr>
    <th>No.</th><th>タイトル</th><th>著者</th><th>出版社</th><th>定価</th><th>スター</th><th>レビュー</th>
    </tr>

    @foreach ($items as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->author}}</td>
        <td>{{$item->publisher}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->star}}</td>
        <td>{{$item->review}}</td>
    </tr>
    @endforeach

</table>
@endsection

@section('footer')
copyright 2023 ygnd.
@endsection