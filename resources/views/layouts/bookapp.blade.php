<html>
    <head>
        <title>Book Review Site</title>
    </head>
    <style>
        body {
            background-color: #fcedff;
        }
        h1 {
            font-size: 16pt;
            font-weight: bold;
            color: ;
        }
        td {
            margin: 5px;
        }
        .item_name {
            text-align: left;
        }
        .search table {
            border: solid 1px black;
            padding: 8px;
        }
        .footer {
            text-align: right;
        }

    </style>
    <body>
        <h1>Book Review Site</h1>
        <div class="search">
            @section('content')
            <h3>※検索項目※</h3>
            <form action="/index" method="POST">
                <table>
                    <tr>
                        <th>タイトル </th><td><input type="text" name="title"></td>
                    </tr>
                    <tr>
                        <th>著者 </th><td><input type="text" name="author"></td>
                    </tr>
                    <tr>
                        <th>出版社 </th><td><input type="text" name="publisher"></td>
                    </tr>
                    <tr>
                        <th>定価 </th><td><input type="number" name="price"></td>
                    </tr>
                    <tr>
                        <th>スター </th>
                        <td>
                            <select name="star">
                                <option value="">--星の数を選択--</option>
                                <option value="★☆☆☆☆">-★☆☆☆☆</option>
                                <option value="★★☆☆☆">-★★☆☆☆</option>
                                <option value="★★★☆☆">-★★★☆☆</option>
                                <option value="★★★★☆">-★★★★☆</option>
                                <option value="★★★★★">-★★★★★</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>レビュー </th>
                        <td><textarea name="review" id="" cols="60" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input type="submit" value="検索" class="find_btn">
                            <input type="submit" value="追加" class="add_btn">
                        </td>
                    </tr>
                </table>
            </form>
            <hr>
        </div>
        
        <div class="content">

            @yield('content')
        </div>

        <div class="footer">
            <hr>
            @yield('footer')
        </div>
    </body>
</html>

