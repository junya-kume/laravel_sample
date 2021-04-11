<html>
    <head>
        <title>アプリ名 - @yield('title')</title>
    </head>
    <body>
      <p>サイドの上</p>
        @section('sidebar')
            ここがメインのサイドバー
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>