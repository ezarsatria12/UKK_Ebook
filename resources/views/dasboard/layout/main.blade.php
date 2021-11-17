<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ URL::asset('css/index.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    @include('dasboard.layout.navbar')
        @include('dasboard.layout.sidebar')
        <main class="col-md-9 ms-s-auto col-lg-10 px-md-4">
            @yield('container')
                
            </main>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="js/index.js"></script>       
</body>

</html>