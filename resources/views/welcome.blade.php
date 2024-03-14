<!DOCTYPE html>
<html>
<head>
    <title>IAI Laravel</title>
    <link rel="stylesheet" href="{{assets/css/app.css}}">
</head>
<body>
    <div class="banner">
        <h1>IAI Laravel</h1>
    </div>
    <div class="sidebar">
        @include('includes.sidebar')
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
