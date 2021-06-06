<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.style')
    @yield('title')
</head>

<body>
    @include('includes.sidebar')
    @include('includes.navbar')
    <div class="page-wrapper">
        <div class="page-content-tab">

            @yield('content')
            @include('includes.footer')
        </div>
    </div>
    @include('includes.script')
</body>

</html>
