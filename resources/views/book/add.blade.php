@extends('layouts.bookapp')

@yield('title', 'Book.Add')

@section('content')
@parent

<h3>※新規登録追加※</h3>
@if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/book/add" method="POST">
    <table>
        <tr>
            <th>No.</th><th>タイトル</th><th>著者</th><th>出版社</th><th>定価</th><th>スター</th><th>レビュー</th>
        </tr>

        @foreach ($items as $item)
        <tr>
            <td>{{$item->getDate()}}</td>
        </tr>
        @endforeach

</table>
</form>
@endsection

@section('footer')
copyright 2023 ygnd.
@endsection