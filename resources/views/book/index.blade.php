@extends('layouts.bookapp')

@yield('title')

@section('content')
@parent

<h3>※登録一覧※</h3>
<table>
    <tr>
    <th class="item_name">登録ID:タイトル(著者)</th>
    </tr>

    @foreach ($items as $item)
    <tr>
        <td>{{$item->getDate()}}</td>
    </tr>
    @endforeach

</table>
@endsection

@section('footer')
copyright 2023 ygnd.
@endsection