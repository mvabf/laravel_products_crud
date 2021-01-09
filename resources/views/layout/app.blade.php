<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Product Register</title>
</head>
<body>

    <div class="container">
        <main role="main">
            @hasSection ('body')
                @yield('body')
            @endif
        </main>
    </div>
    
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>