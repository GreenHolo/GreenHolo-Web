<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GreenHolo Shop</title>

    <link href="/css/app.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
    <nav class="bg-white w-full px-10 py-5">
        <div class="flex items-center">
            <img src=" {{ asset('assets/shoplogo.svg') }} " alt="">
            <form action="">
                <input class="form-input w-full h-12 bg-gray-100 focus:bg-green-100 rounded-full px-5 ml-5 max-w-lg outline-none" placeholder="Search" type="search" name="" id="">
            </form>
            <div class="ml-auto flex items-center">
                <a class="m-5" href=""><img src=" {{ asset('assets/shopsaved.svg') }} " alt=""></a>
                <p class="m-5 p-2 font-bold text-xl w-10 h-10 rounded-full text-white bg-green-800 text-center ">0</p>
                <p class="m-5">US</p>
            </div>

        </div>
    </nav>

    @yield('content')
    
</body>
</html>