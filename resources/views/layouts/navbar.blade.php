<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenHolo</title>

    <link href="/css/app.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body style="background: #F9f9f9">
    <nav class="bg-white w-full px-10 py-5">
        <div class="flex items-center">
            <img class="w-12" src="{{ asset('assets/logo-green.svg') }}" alt="GreenHolo">
            <input class="form-input w-full h-12 bg-gray-100 focus:bg-green-100 rounded-full px-5 ml-5 max-w-xs outline-none" placeholder="Search" type="search" name="" id="">
            <div class="flex ml-auto">
                <a class="mr-10" href="/home"><img class="m-3" src="{{ asset('assets/home.svg') }}" alt="home"></a>
                <a class="mr-10" href="/network"><img class="m-3" src="{{ asset('assets/people.svg') }}" alt="pple"></a>
                <a class="mr-10" href="/jobs"><img class="m-3" src="{{ asset('assets/jobs.svg') }}" alt="job"></a>
                <a class="mr-10" href="/chats"><img class="m-3" src="{{ asset('assets/chat.svg') }}" alt="chat"></a>
                <a class="mr-10" href="/notifications"><img class="m-3" src="{{ asset('assets/notification.svg') }}" alt="not"></a>
                <div x-data="{ open: false }" class="relative">
                    <button x-on:click="open = true" style="outline: none" class="mr-10"><img class="m-3 w-8 h-8" src="{{ asset('assets/profile.png') }}" alt="profile"></button>
                    <div x-show.transition="open" x-on:click.away="open = false" class="absolute right-0 w-48 mt-5 py-4 bg-white border border-green-100 rounded-lg shadow-xl">
                        <a href="/profile" class="transition-colors flex items-center font-semibold duration-200 focus:text-green-500 block px-4 py-2 mb-3 text-normal text-gray-900 rounded"><img class="w-8 h-8 mr-4" src=" {{ asset('assets/profile.png') }} " alt=""> View profile</a>
                        <a href="#" class="transition-colors duration-200 block px-4 py-1 font-semibold focus:text-green-500 my-3 text-normal text-gray-900">Settings</a>
                        <a href="#" class="transition-colors duration-200 block px-4 py-1 font-semibold focus:text-green-500 my-3 text-normal text-gray-900">Help</a>
                    </div>
                </div>
            </div>
        </div>
        

    </nav>
    @yield('content')
</body>
</html>