<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('css')
</head>
<body>
    <div>
        @include('frontend.includes.header')
    </div>
    <div>
        nội dung 1
    </div>
    <div>
        @yield('content')
    </div>
    <div>nội dung 2</div>
    <div>
        @include('frontend.includes.footer')
    </div>
</body>
@yield('script')
</html>