<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
       
    <link rel="icon" href="{{ asset('img/logo.jpg') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <div id="app">
        <header class="global-nav">
            <img src="{{ asset('./img/logo.jpg') }}">
            <nav class="menu-list">
                <ul>              
                    <li><a href="/">HOME</a></li>
                    <li><a href="/books">BOOKS</a></li>
                    <li><a href="###">SETTING</a></li>
                </ul>
            </nav>
        </header>
        <div class="content">
            <h1 class="caption">@yield('title')</h1>
            @yield('content')
            <footer class="footer">
                <p>© 2020 OhkiLab.</p>
            </footer>
        </div>
    </div>    
    <script src=" {{ mix('js/app.js') }} "></script>
</body>
</html>