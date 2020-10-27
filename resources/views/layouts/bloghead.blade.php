<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biota</title>

    <link href="/css/app.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
    <nav class="mobile-nav navbar bg-white w-full px-10 py-5">
        <div class="flex items-center">
            <a href="/shop">
                <img src=" {{ asset('assets/biota.svg') }} " alt="" style="max-width: 200px">
            </a>
            <div class="ml-auto flex items-center">
                <a class="m-5 text-xl font-semibold text-green-500" href="">Sign In</a>
                <a class="m-5 border rounded-lg hover:bg-green-500 hover:text-white text-green-600 border-green-500 font-bold py-3 px-4" href="">Get Started</a>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>