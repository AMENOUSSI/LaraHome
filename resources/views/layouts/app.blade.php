<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>

    <header>
        <div class="banner">
            <h1>IAI Laravel</h1>
        </div>
    </header>

    
    <div class="sidebar">
        @include('includes.sidebar')
    </div>
    <main class="content">
        @yield('content')
    </main>
</body>
</html>
